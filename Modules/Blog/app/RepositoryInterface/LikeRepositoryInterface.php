<?php 
 namespace Modules\Blog\app\RepositoryInterface;

 interface LikeRepositoryInterface{
    public function blogLike($request);
    public function commentLike($request);
 }