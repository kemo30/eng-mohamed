<?php

namespace Modules\Blog\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Blog\app\Http\Requests\CreateLikeCommentRequest;
use Modules\Blog\app\Http\Requests\CreateLikeRequest;
use Modules\Blog\app\RepositoryInterface\LikeRepositoryInterface;

class LikesController extends Controller
{
    private $LikeRepository;

    public function __construct(LikeRepositoryInterface $LikeRepository){
        $this->LikeRepository = $LikeRepository;
    }
    public function blog_Like(CreateLikeRequest $request)
    {
          $like = $this->LikeRepository->blogLike($request);
          if($like == true){
            return response([
                'maasege' => 'you like this blog Successfully',
            ]);
          }else{
            return response([
                'maasege' => 'You already are like this blog',
            ]);
          }

       
    }

   
    public function comment_like(CreateLikeCommentRequest $request)
    {
        $like = $this->LikeRepository->commentLike($request);
        if($like == true){
          return response([
              'maasege' => 'you like this comment Successfully',
          ]);
        }else{
          return response([
              'maasege' => 'You already are like this comment',
          ]);
        }
    }

  
}
