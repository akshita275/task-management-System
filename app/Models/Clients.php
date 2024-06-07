<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'address',
        'city',
        'district',
        'state',
        'phone',
        'email_address',
        'website',
        'logo',
        'status',
    ];
}
