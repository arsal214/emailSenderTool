<?php

namespace App\Jobs;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Traits\ActionsTrait;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,ActionsTrait;

    protected $customer;
    protected $templateName;
    protected $params;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Customer $customer, $templateName ,$params)
    {
        $this->customer = $customer;
        $this->templateName = $templateName;
        $this->params  = $params;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->sendMail($this->customer->email, $this->templateName, $this->params);
        $this->customer->update(['status' => 'Sent']);
    }
}
