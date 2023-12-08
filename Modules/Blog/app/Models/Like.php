<?php

namespace Modules\Blog\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\factories\LikeFactory;

class Like extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['user_id'];

    public function likeable(){
        return $this->morphTo();
    }
    
    // protected static function newFactory(): LikeFactory
    // {
    //     //return LikeFactory::new();
    // }
}
