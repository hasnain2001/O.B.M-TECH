<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{ 
    protected $table ='blogs';
    protected $fillable = [
        'title',
        'slug',
        'category_image',
        'content','meta_title',
        'meta_description',
        'meta_keyword'
    ];
}