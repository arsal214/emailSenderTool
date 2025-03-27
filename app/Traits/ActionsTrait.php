<?php

namespace App\Traits;

use App\Mail\DynamicMail;
use App\Models\Customer;
use App\Models\EmailLog;
use App\Models\Setting;
use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

trait ActionsTrait
{

    public function sendDynamicMail($email, $templateName, $params = null)
    {
        // Validate Email
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            EmailLog::create([
                'recipient_email' => $email,
                'status' => 'failed',
                'message' => 'Invalid email',
            ]);
            $customer = Customer::where('email',$email)->first();
            if($customer){
                $customer->update([
                    'status' => 'Fail'
                ]);
            }
            Log::error("Invalid email: {$email}");
            return; // Skip sending email if invalid
        }

        // Check if domain exists
        if (!checkdnsrr(explode('@', $email)[1], 'MX')) {
            EmailLog::create([
                'recipient_email' => $email,
                'status' => 'failed',
                'message' => 'Invalid domain',
            ]);
            $customer = Customer::where('email',$email)->first();
            if($customer){
                $customer->update([
                    'status' => 'Fail'
                ]);
            }
            Log::error("Invalid domain for email: {$email}");

            return; // Skip sending email if domain is invalid
        }

        try {
            // Fetch template data
            $template = Template::find($templateName);
            if (!$template) {
                Log::error("Template not found: {$templateName}");
                return; // Skip if template is not found
            }

            // Replace placeholders in template body
            $data = $params ? strtr($template->body, $params) : $template->body;

            // Send dynamic mail
            Mail::to($email)->send(new DynamicMail($data, $template->subject));
            $customer = Customer::where('email',$email)->first();
            if($customer){
                $customer->update([
                    'status' => 'Sent'
                ]);
            }

            EmailLog::create([
                'user_id' =>$customer->id ?? '',
                'recipient_email' => $email,
                'status' => 'sent',
                'template_id' => $template->id,
            ]);
            Log::info("Email sent {$email}");


        } catch (\Exception $e) {
            EmailLog::create([
                'recipient_email' => $email,
                'status' => 'failed',
                'message' => $e->getMessage(),
            ]);
            Log::error("Failed to send email to {$email}: " . $e->getMessage());

        }
    }

}
