<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public static function truncate()
    {
    }


    public function articles()
{
    return $this->belongsToMany(Article::class);
}
}
