<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class Testimonial extends Model
{
    use Translatable;
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

    // Accessors for current locale
    public function getClientNameAttribute($value)
    {
        $names = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($names)) return '';
        $locale = app()->getLocale();
        return $names[$locale] ?? $names['en'] ?? '';
    }

    public function getClientRoleAttribute($value)
    {
        $roles = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($roles)) return '';
        $locale = app()->getLocale();
        return $roles[$locale] ?? $roles['en'] ?? '';
    }

    public function getContentAttribute($value)
    {
        $contents = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($contents)) return '';
        $locale = app()->getLocale();
        return $contents[$locale] ?? $contents['en'] ?? '';
    }
}
