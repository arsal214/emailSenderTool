<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ImportCustomerJob;
use App\Jobs\ImportSuppliersJob;
use App\Jobs\SendEmailToCustomerJob;
use App\Jobs\SendWelcomeEmail;
use App\Models\Customer;
use App\Models\Template;
use App\Traits\ActionsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Models\Audit;

class CustomerController extends Controller
{
    use ActionsTrait;

    function __construct()
    {
        $this->middleware('permission:customers-list', ['only' => ['index']]);
        $this->middleware('permission:customers-view', ['only' => ['show']]);
        $this->middleware('permission:customers-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:customers-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:customers-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->get();
        $templates = Template::all();

        return view('admin.customers.index', compact('customers', 'templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'email'      => 'required|email|unique:customers,email',
        ]);

        Customer::create([
            'first_name'              => $request->first_name,
            'last_name'               => $request->last_name,
            'email'                   => $request->email,
            'phone_number'            => $request->phone_number,
            'department'              => $request->department,
            'profile_headline'        => $request->profile_headline,
            'job_related'             => $request->job_related,
            'company_website'         => $request->company_website,
            'company_website_changes' => $request->company_website_changes,
            'status'                  => 'Pending',
        ]);

        return redirect()->route('customers.index')
            ->with('success', 'Customer added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')
            ->with('success', 'Data Delete successfully.');

    }

    public function resetStatus(Customer $customer)
    {
        $customer->update(['status' => 'Pending']);

        return redirect()->route('customers.index')
            ->with('success', $customer->first_name . ' ' . $customer->last_name . ' reset to Pending.');
    }

    public function sendEmail(Request $request, Customer $customer)
    {
        $request->validate([
            'template_id' => 'required|exists:templates,id',
        ]);

        SendEmailToCustomerJob::dispatch($customer, $request->template_id);

        return redirect()->route('customers.index')
            ->with('success', 'Email queued for ' . $customer->first_name . ' ' . $customer->last_name . '.');
    }

    public function import(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required',
            ]);
            $upload = $request->file('file');
            $filePath = $upload->storeAs('imports', time() . '-' . $upload->getClientOriginalName());

            ImportCustomerJob::dispatch(storage_path("app/{$filePath}"));
        } catch (\Throwable $th) {
            return redirect()->back()
                ->with('warning', 'File import unsuccessful.');

        }
        return redirect()->route('customers.index')
            ->with('success', 'File imported successfully.');

    }

}
