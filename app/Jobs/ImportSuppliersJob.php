<?php

namespace App\Jobs;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ImportSuppliersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;

    public $timeout = 7200;


    /**
     * Create a new job instance.
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
//        DB::beginTransaction();
//        try {
        $file = fopen($this->filePath, 'r');
        $header = fgetcsv($file);
        $escapedHeader = [];

        foreach ($header as $key => $value) {
            $lheader = strtolower($value);
            $escapedItem = preg_replace('/[^a-z]/', '', $lheader);
            array_push($escapedHeader, $escapedItem);
        }

        while ($columns = fgetcsv($file)) {
            foreach ($columns as $key => $value) {
                $columns[$key] = trim($value);
            }

            $data = array_combine($escapedHeader, $columns);

            if (Customer::where('email', $data['email'] ?? '')->exists()) {
                continue; // Skip this row if email already exists
            }

            $user = Customer::create([
                'first_name' => $data['firstname'] ?? '',
                'last_name' => $data['lastname'] ?? '',
                'email' => $data['email'] ?? '',
                'phone_number' => $data['telephone'] ?? null,
                'status' => 'Pending',
            ]);

        }

        fclose($file);
//            DB::commit();
//        } catch (\Throwable $th) {
//            DB::rollBack();
        Log::error('Import Failed: ' );
//        }
    }
}
