<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    const ROLE_USER = 'user';
    const ROLE_EMPLOYEE = 'employee';
    const ROLE_ADMIN = 'admin';
    
    protected $fillable = [
        'id',
        'full_name',
        'email',
        'password',
        'verification_token',
        'is_verified',
        'reset_token',
        'reset_token_expiry',
        'verification_code',
        'phone',
        'country',
        'city',
        'address',
        'postcode',
        'profile_picture',
        'dob',
        'status',
        'verification_code_expires_at',
        'type' // Add this if you want to use it
    ];

    protected $hidden = [
        'password',
        'verification_token',
        'reset_token'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'reset_token_expiry',
        'dob'
    ];
}