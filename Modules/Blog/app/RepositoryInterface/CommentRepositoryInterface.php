<?php 
 namespace Modules\Blog\app\RepositoryInterface;

interface CommentRepositoryInterface{
  public function createComment($request);
  public function createCommentReplay($request);
}