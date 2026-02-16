<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class ProjectFeature extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'project_id',
        'icon',
        'title',
        'description',
        'order',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // Accessors for current locale
    public function getTitleAttribute($value)
    {
        $titles = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($titles)) return '';
        $locale = app()->getLocale();
        return $titles[$locale] ?? $titles['en'] ?? '';
    }

    public function getDescriptionAttribute($value)
    {
        $descriptions = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($descriptions)) return '';
        $locale = app()->getLocale();
        return $descriptions[$locale] ?? $descriptions['en'] ?? '';
    }
}
