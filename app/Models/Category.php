<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'status'];

    
    public function newslist()
    {
        return $this->hasMany('App\Models\News');
    }
}
