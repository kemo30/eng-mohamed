<?php

namespace Modules\Blog\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Blog\app\Models\Blog;
use Modules\Blog\app\RepositoryInterface\BlogRepositoryInterface;
use Modules\Blog\app\Resources\BlogResource;
use Modules\Blog\app\Resources\BlogsResource;

class BlogController extends Controller
{

    private $BlogRepository;

    public function __construct(BlogRepositoryInterface $BlogRepository){
        $this->BlogRepository = $BlogRepository;
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $blogs = $this->BlogRepository->getAllBlogs();
       return BlogsResource::collection($blogs);
       
    }

    public function show($id){

        $blog = $this->BlogRepository->getOneBlog($id);
        return new BlogResource($blog);

    }

  
 
}
