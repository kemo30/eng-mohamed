<?php

namespace Modules\Blog\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['comment', 'user_id'];
    
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function commentable(){
        return $this->morphTo();
    }
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
    
    protected static function newFactory(): CommentFactory
    {
        //return CommentFactory::new();
    }
}
