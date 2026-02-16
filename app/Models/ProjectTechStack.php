<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTechStack extends Model
{
    use HasFactory;

    protected $table = 'project_tech_stack';

    protected $fillable = [
        'project_id',
        'name',
        'icon',
        'order',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
