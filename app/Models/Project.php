<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\ImageUploadTrait;

use App\Traits\Translatable;

class Project extends Model
{
    use HasFactory, ImageUploadTrait, Translatable;

    protected $fillable = [
        'slug',
        'service_id',
        'client_name',
        'duration',
        'website_url',
        'title',
        'description',
        'overview',
        'testimonial_text',
        'testimonial_name',
        'testimonial_role',
        'featured_image',
        'is_featured',
        'order',
        'status',
    ];

    protected $casts = [
        'client_name' => 'array',
        'title' => 'array',
        'description' => 'array',
        'overview' => 'array',
        'testimonial_text' => 'array',
        'testimonial_name' => 'array',
        'testimonial_role' => 'array',
        'is_featured' => 'boolean',
    ];

    // Relationships
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('order');
    }

    public function features(): HasMany
    {
        return $this->hasMany(ProjectFeature::class)->orderBy('order');
    }

    public function techStack(): HasMany
    {
        return $this->hasMany(ProjectTechStack::class)->orderBy('order');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByService($query, $serviceId)
    {
        return $query->where('service_id', $serviceId);
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

    public function getOverviewAttribute($value)
    {
        $overviews = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($overviews)) return '';
        $locale = app()->getLocale();
        return $overviews[$locale] ?? $overviews['en'] ?? '';
    }

    public function getClientNameAttribute($value)
    {
        $names = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($names)) return '';
        $locale = app()->getLocale();
        return $names[$locale] ?? $names['en'] ?? '';
    }

    public function getTestimonialTextAttribute($value)
    {
        $texts = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($texts)) return '';
        $locale = app()->getLocale();
        return $texts[$locale] ?? $texts['en'] ?? '';
    }

    public function getTestimonialNameAttribute($value)
    {
        $names = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($names)) return '';
        $locale = app()->getLocale();
        return $names[$locale] ?? $names['en'] ?? '';
    }

    public function getTestimonialRoleAttribute($value)
    {
        $roles = is_array($value) ? $value : json_decode($value, true);
        if (!is_array($roles)) return '';
        $locale = app()->getLocale();
        return $roles[$locale] ?? $roles['en'] ?? '';
    }
}
