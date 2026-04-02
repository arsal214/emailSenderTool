<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailToCustomerJob;
use App\Models\Customer;
use App\Models\Template;
use App\Traits\ActionsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailSendController extends Controller
{

    use ActionsTrait;

    public function create()
    {

        $templates = Template::all();
        return view('admin.email-send.form', compact('templates'));
    }

    public function store(Request $request)
    {
//        try {
//            DB::beginTransaction();
            $customers = Customer::where('status', 'Pending')->get();
            // $customers = Customer::where('email','arsalkamoka786@gmail.com')->get();
            foreach ($customers as $index => $customer) {
                SendEmailToCustomerJob::dispatch($customer, $request->template_name)->delay(now()->addMinutes(1 * ($index + 1)));

//                $this->sendmail($customer->email, $templateName, $arr);
            }
//            DB::commit();
//        } catch (\Throwable $th) {
//            DB::rollBack();
//            return redirect()->back()
//                ->with('warning', 'Email Not Sent.');
//        }

        return redirect()->route('customers.index')
            ->with('success', 'Email Sent.');
    }

}



