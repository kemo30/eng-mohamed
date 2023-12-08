<?php

namespace Modules\Blog\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Blog\app\Http\Requests\CreateCommentReplayRequest;
use Modules\Blog\app\Http\Requests\CreatePostCommentRequest;
use Modules\Blog\app\RepositoryInterface\CommentRepositoryInterface;

class CommentsController extends Controller
{
    
    private $CommentRepository;

    public function __construct(CommentRepositoryInterface $CommentRepository){
        $this->CommentRepository = $CommentRepository;
    }
    
    public function create(CreatePostCommentRequest $request)
    {
      
     return  $comment = $this->CommentRepository->createComment($request);
   
       
    }
    public function createReplay(CreateCommentReplayRequest $request){

        return $this->CommentRepository->createCommentReplay($request);

    }

  
}
