<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'status',
        'published_at',
    ];

    public function blog(){
        return $this->hasMany(blog_lang::class,'parent_id','id');
    }
}
