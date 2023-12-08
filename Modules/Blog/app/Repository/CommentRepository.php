<?php
 namespace Modules\Blog\app\Repository;

use Modules\Blog\app\Models\Blog;
use Modules\Blog\app\Models\Comment;
use Modules\Blog\app\RepositoryInterface\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface{

    public function createComment($request){


       return Blog::find($request->blog_id)->comments()->create([
           'user_id' => $request->user_id,
           'comment' => $request->comment,
       ]);



    }
    public function createCommentReplay($request){

        return Comment::find($request->comment_id)->comments()->create([
            'user_id' => $request->user_id,
            'comment' => $request->replay,
        ]);

    }

}