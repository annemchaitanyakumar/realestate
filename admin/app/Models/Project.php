<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'full_description',
        'client',
        'location',
        'category',
        'value',
        'start_date',
        'end_date',
        'status',
        'image',
        'gallery',
        'is_featured',
        'is_active',
        'order',
    ];

    protected $casts = [
        'gallery' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
        'value' => 'decimal:2',
    ];

    public function getPublicUrlAttribute()
    {
        $baseProjectDir = dirname(base_path()) . DIRECTORY_SEPARATOR . 'projects' . DIRECTORY_SEPARATOR;
        
        $candidates = array_unique(array_filter([
            $this->slug,
            Str::slug($this->slug),
            Str::before($this->slug, '-'),
        ]));

        foreach ($candidates as $candidate) {
            if (is_dir($baseProjectDir . $candidate) || is_file($baseProjectDir . $candidate . DIRECTORY_SEPARATOR . 'index.php')) {
                return '/projects/' . $candidate . '/';
            }
        }
        return null;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
