<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_lang extends Model
{
    use HasFactory;

     
    protected $fillable = [
        'language',
        'parent_id',
        'image',
        'cover_image',
        'content',
        'title',
    ];

    public function main_blog(){
        return $this->belongsTo(blog::class,'parent_id' ,'id');
    }
}
