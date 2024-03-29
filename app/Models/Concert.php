<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Concert extends Model
{   
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'Slug',
        'artist',
        'vanue'
    ];
    use HasFactory;
    
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugOptions(){
    return SlugOptions::create()
        ->generateSlugsFrom('title')
        ->saveSlugsTo('slug');
}

}
