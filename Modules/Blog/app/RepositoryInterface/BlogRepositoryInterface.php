<?php
 namespace Modules\Blog\app\RepositoryInterface;

interface BlogRepositoryInterface{

   public function getAllBlogs();

   public function getOneBlog($id);


}