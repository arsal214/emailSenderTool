<?php

namespace App\Jobs;

use App\Traits\ActionsTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SendEmailToCustomerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, ActionsTrait;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $user;
    public $templateId;

    public function __construct($user, $templateId)
    {
        $this->user = $user;
        $this->templateId = $templateId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $arr = [
            '{$name}' => $this->user->first_name ?? ' ',
        ];
        $this->sendDynamicMail($this->user->email, $this->templateId, $arr);

    }
}
