<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('admin.customers.index', compact('customers'));
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
        //
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


    public function import(Request $request)
    {
        try {
            DB::beginTransaction();

            // Get the uploaded file
            $upload = $request->file('file');
            $ext = pathinfo($upload->getClientOriginalName(), PATHINFO_EXTENSION);

            // Check if the file is a CSV
            if ($ext != 'csv') {
                return redirect()->route('customers.index')
                    ->with('warning', 'File cannot be imported successfully.');
            }

            // Read the file contents
            $filePath = $upload->getRealPath();
            $file = fopen($filePath, 'r');
            $header = fgetcsv($file);

            // Clean and normalize the header
            $escapedHeader = [];
            foreach ($header as $key => $value) {
                $lheader = strtolower($value);
                $escapedItem = preg_replace('/[^a-z]/', '', $lheader);
                array_push($escapedHeader, $escapedItem);
            }

            // Process each row of the CSV file
            while ($columns = fgetcsv($file)) {
                // Clean data (remove non-numeric characters from phone number and other fields)
                foreach ($columns as $key => $value) {
                    $value = preg_replace('/\D/', '', $value);
                }

                // Combine header with row values
                $data = array_combine($escapedHeader, $columns);

                // Extract necessary fields
                $name = $data['firstname'];
                $email = $data['email'];

                // Check if both name and email are provided
                if (!empty($name) && !empty($email)) {
                    // Check if the email already exists in the database
                    $existingCustomer = Customer::where('email', $email)->first();

                    // If email exists, skip this record
                    if ($existingCustomer) {
                        continue; // Skip the current iteration if email exists
                    }

                    // Create a new customer record
                    $customer = new Customer();
                    $customer->first_name = utf8_encode($data['firstname']);
                    $customer->last_name = utf8_encode($data['lastname']);
                    $customer->email = utf8_encode($data['email']);
                    $customer->phone_number = utf8_encode($data['phonenumber']);
                    $customer->department = utf8_encode($data['relateddeparment']);
                    $customer->profile_headline = utf8_encode($data['linkedinprofileheadline']);
                    $customer->job_related = utf8_encode($data['jobrelated']);
                    $customer->company_website = utf8_encode($data['companywebsite']);
                    $customer->company_website_changes = utf8_encode($data['websitechangesneed']);
                    $customer->status = 'Pending';
                    $customer->save();
                }
            }

            // Commit the transaction
            DB::commit();

        } catch (\Throwable $th) {
            // Rollback the transaction in case of error
            DB::rollBack();
            return redirect()->back()
                ->with('warning', 'File import unsuccessful.');
        }

// Return success message
        return redirect()->route('customers.index')
            ->with('success', 'File imported successfully.');

    }


}
