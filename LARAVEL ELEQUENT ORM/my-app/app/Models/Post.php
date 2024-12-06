<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function tag(){
        return $this->belongsToMany(Tag::class,'post_tags');
    }
}
