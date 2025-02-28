<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailToCustomerJob;
use App\Models\Customer;
use Illuminate\Console\Command;

class SendCustomerEmailCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:customer-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Customer Email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $templateId = 3;
        $customers = Customer::where('status', 'Pending')
            ->take(299)
            ->get();

        foreach ($customers as $i => $user) {
            SendEmailToCustomerJob::dispatch($user, $templateId)->delay(now()->addMinutes(10 * (++$i)));
            $this->info('Email sent to: ' . $user->email);
        }
        $this->info('All emails sent successfully.');
    }
}
