<?php

namespace App\Traits;

use App\Mail\DynamicMail;
use App\Models\Setting;
use App\Models\Template;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

trait ActionsTrait
{

    public function sendMail($email, $templateName, $params = null)
    {
        $template = Template::where('name', $templateName)->first();
        $data = $params ? strtr($template->body, $params) : $template->body;
        Mail::to($email)->send(new DynamicMail($data, $template->subject));
    }

}
