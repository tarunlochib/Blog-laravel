<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Contracts\Likeable;
// use App\Models\Concerns\Likes;


class Post extends Model
{
    use HasFactory;

    // use Likes;  

    protected $guarded = ['id'];
}
