<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Blog extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'is_active',
        'order',
    ];

    protected $casts = [
        'title' => 'json',
        'content' => 'json',
        'is_active' => 'boolean',
    ];

    // Accessors for current locale
    public function getTitleAttribute($value)
    {
        $titles = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($titles)) return '';
        $locale = app()->getLocale();
        return $titles[$locale] ?? $titles['en'] ?? '';
    }

    public function getContentAttribute($value)
    {
        $contents = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($contents)) return '';
        $locale = app()->getLocale();
        return $contents[$locale] ?? $contents['en'] ?? '';
    }
}
