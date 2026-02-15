<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'role',
        'image',
        'bio',
        'social_links',
        'cv_link',
        'order',
        'is_active',
    ];

    protected $casts = [
        'name' => 'json',
        'role' => 'json',
        'bio' => 'json',
        'social_links' => 'json',
        'is_active' => 'boolean',
    ];
}
