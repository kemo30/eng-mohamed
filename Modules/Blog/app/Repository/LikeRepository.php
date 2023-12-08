<?php
 namespace Modules\Blog\app\Repository;

use Modules\Blog\app\Models\Blog;
use Modules\Blog\app\Models\Comment;
use Modules\Blog\app\RepositoryInterface\LikeRepositoryInterface;

 class LikeRepository implements LikeRepositoryInterface{
    public function blogLike($request){
        $blog = Blog::find($request->blog_id);

        // check if user has like this blog befor

        $liked = false;
        foreach($blog->likes as $like){
           if($like->user_id == $request->user_id){
            $liked = true;
           }
        }

        if($liked == false){

             $blog->likes()->create([
                'user_id' =>$request->user_id,
            ]);
            return true;
        }else{
            
           return false;
            
        }


        


        

    }
    public function commentLike($request){

        $comment = Comment::find($request->comment_id);

        // check if user has like this blog befor

        $liked = false;
        foreach($comment->likes as $like){
           if($like->user_id == $request->user_id){
            $liked = true;
           }
        }

        if($liked == false){

             $comment->likes()->create([
                'user_id' =>$request->user_id,
            ]);
            return true;
        }else{
            
           return false;
            
        }
    }
 }