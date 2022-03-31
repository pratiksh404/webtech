<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['embeded_trailer', 'embeded_source'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function getEmbededTrailerAttribute()
    {
        if (isset($this->trailer)) {
            return preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", '<iframe class="embed-responsive-item" width="420" height="315" src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $this->trailer);
        }
    }
    public function getEmbededSourceAttribute()
    {
        if (isset($this->source)) {
            return preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", '<iframe class="embed-responsive-item" width="420" height="315" src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $this->source);
        }
    }
}
