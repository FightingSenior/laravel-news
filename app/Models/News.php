<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'slug', 'details', 'image', 'category_id', 'status', 'view_count'];


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
