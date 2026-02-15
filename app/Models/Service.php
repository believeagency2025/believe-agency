<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'icon_class',
        'description',
        'content',
        'features',
        'process',
        'why_choose_us',
        'image',
        'order',
        'is_active',
    ];

    protected $casts = [
        'title' => 'json',
        'subtitle' => 'json',
        'description' => 'json',
        'content' => 'json',
        'features' => 'json',
        'process' => 'json',
        'why_choose_us' => 'json',
        'is_active' => 'boolean',
    ];
}
