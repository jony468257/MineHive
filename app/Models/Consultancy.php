<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'full_name',
        'company_name',
        'designation',
        'mobile',
        'email',
        'message',
    ];
}
