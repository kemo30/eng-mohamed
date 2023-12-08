<?php
 namespace Modules\Blog\app\Repository;

use Modules\Blog\app\Models\Blog;
use Modules\Blog\app\RepositoryInterface\BlogRepositoryInterface;

 class BlogRepository implements BlogRepositoryInterface{

    public function getAllBlogs(){
        $Blogs = Blog::all();
        return $Blogs;

    }
    public function getOneBlog($id){
        $blog = Blog::find($id);
        return $blog;
    }
 }