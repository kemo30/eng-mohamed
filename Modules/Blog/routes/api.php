<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Blog\app\Http\Controllers\Api\BlogController;
use Modules\Blog\app\Http\Controllers\Api\CommentsController;
use Modules\Blog\app\Http\Controllers\Api\LikesController;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/

// Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
//     Route::get('blog', fn (Request $request) => $request->user())->name('blog');
// });

// blogs routes 
Route::get('/Blogs',[BlogController::class,'index']);
Route::get('/Blog/{id}',[BlogController::class,'show']);

//create comment 
Route::post('/comment',[CommentsController::class,'create']);
Route::post('/replay',[CommentsController::class,'createReplay']);

//create likes for blog and comment and replay
Route::post('/blog-like',[LikesController::class,'blog_Like']);
Route::post('/comment-like',[LikesController::class,'comment_like']);




