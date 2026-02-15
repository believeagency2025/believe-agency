<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'client_name',
        'client_role',
        'content',
        'image',
        'rating',
        'is_active',
    ];

    protected $casts = [
        'client_name' => 'json',
        'client_role' => 'json',
        'content' => 'json',
        'is_active' => 'boolean',
    ];
}
