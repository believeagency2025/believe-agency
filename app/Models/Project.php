<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'slug',
        'description',
        'content',
        'main_image',
        'gallery',
        'client_name',
        'completion_date',
        'website_url',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'title' => 'json',
        'description' => 'json',
        'content' => 'json',
        'gallery' => 'json',
        'is_featured' => 'boolean',
        'completion_date' => 'date',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
