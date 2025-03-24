<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RealEstate extends Model
{
    use HasSlug;
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'location', 'body', 'image', 'owner', 'price', 'is_sold', 'type',
    ];

    public function scopeSearch($query, $q)
    {
        if($q == null) return $query;
        return $query
            ->where('title', 'LIKE', "%{$q}%")
            ->orWhere('location', 'LIKE', "%{$q}%")
            ->orWhere('owner', 'LIKE', "%{$q}%");
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->usingSeparator('-');
    }
}
