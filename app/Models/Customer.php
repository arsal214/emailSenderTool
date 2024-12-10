<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'department',
        'profile_headline',
        'job_related',
        'company_website',
        'company_website_changes',
        'status'
    ];

}
