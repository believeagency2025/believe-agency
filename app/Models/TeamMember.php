<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class TeamMember extends Model
{
    use Translatable;
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

    // Accessors for current locale
    public function getNameAttribute($value)
    {
        $names = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($names)) return '';
        $locale = app()->getLocale();
        return $names[$locale] ?? $names['en'] ?? '';
    }

    public function getRoleAttribute($value)
    {
        $roles = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($roles)) return '';
        $locale = app()->getLocale();
        return $roles[$locale] ?? $roles['en'] ?? '';
    }

    public function getBioAttribute($value)
    {
        $bios = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($bios)) return '';
        $locale = app()->getLocale();
        return $bios[$locale] ?? $bios['en'] ?? '';
    }
}
