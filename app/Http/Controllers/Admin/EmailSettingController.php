<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function index()
    {
        $settings = [
            'RESEND_API_KEY'   => env('RESEND_API_KEY', ''),
            'MAIL_FROM_ADDRESS' => env('MAIL_FROM_ADDRESS', ''),
            'MAIL_FROM_NAME'   => env('MAIL_FROM_NAME', ''),
        ];

        return view('admin.email-settings.index', compact('settings'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'RESEND_API_KEY'    => 'required|string',
            'MAIL_FROM_ADDRESS' => 'required|email',
            'MAIL_FROM_NAME'    => 'required|string',
        ]);

        $updates = [
            'RESEND_API_KEY'    => $request->RESEND_API_KEY,
            'MAIL_FROM_ADDRESS' => $request->MAIL_FROM_ADDRESS,
            'MAIL_FROM_NAME'    => $request->MAIL_FROM_NAME,
        ];

        $envPath = base_path('.env');
        $envContent = file_get_contents($envPath);

        foreach ($updates as $key => $value) {
            $value = str_contains($value, ' ') ? "\"{$value}\"" : $value;

            if (preg_match("/^{$key}=.*/m", $envContent)) {
                $envContent = preg_replace("/^{$key}=.*/m", "{$key}={$value}", $envContent);
            } else {
                $envContent .= "\n{$key}={$value}";
            }
        }

        file_put_contents($envPath, $envContent);

        return redirect()->route('email-settings.index')
            ->with('success', 'Email settings updated. Clear config cache if changes do not apply.');
    }
}
