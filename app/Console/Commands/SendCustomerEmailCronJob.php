<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailToCustomerJob;
use App\Models\Customer;
use Illuminate\Console\Command;

class SendCustomerEmailCronJob extends Command
{
    protected $signature = 'send:customer-email {--template=1 : Template ID to use}';

    protected $description = 'Send Customer Email';

    public function handle()
    {
        $templateId   = $this->option('template');
        $batchSize    = 125; // 3000/day ÷ 24 hours
        $delaySeconds = 25;  // 125 emails * 25s = ~52 min, fits in 1 hour

        $customers = Customer::where('status', 'Pending')
            ->take($batchSize)
            ->get();

        if ($customers->isEmpty()) {
            $this->info('No pending customers.');
            return;
        }

        foreach ($customers as $i => $user) {
            SendEmailToCustomerJob::dispatch($user, $templateId)
                ->delay(now()->addSeconds($delaySeconds * $i));
            $this->info('Queued: ' . $user->email);
        }

        $this->info("Queued {$customers->count()} emails.");
    }
}
