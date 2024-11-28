<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'description', 'image_url'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
