<?php

namespace Modules\Blog\database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Blog\app\Models\Blog;
use Modules\Blog\app\Models\Comment;

class SeedFakeBlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        for ($i = 0; $i < 10; $i++) {
           
            Blog::create([
                   'title' => 'Blog'.$i,
                   'blog' => 'Blog body'.$i,
                   
                   
               ]);
           }
        for ($i = 0; $i < 10; $i++) {
           
          User::create([
                 'name' => 'karim'.$i,
                 'email' => 'k'.$i.'@test.com',
                 'password' =>  Hash::make('123123123'),
             ]);
         }
        for ($i = 0; $i < 10; $i++) {
           $blog = Blog::all()->random();
           $blog->comments()->create([
                'comment' => 'This is a sample comment.',
                'user_id' =>  User::all()->random()->id,
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
           $coments = Comment::all()->random();
           $coments->comments()->create([
                'comment' => 'This is a sample replay.',
                'user_id' =>  User::all()->random()->id,
            ]);
        }

       // make fake likes for blogs 
        for ($i = 0; $i < 50; $i++) {
            $blog = Blog::all()->random();
            $blog->likes()->create([
                 
                 'user_id' =>  User::all()->random()->id,
             ]);
         }

      // make fake likes for comments
         for ($i = 0; $i < 100; $i++) {
            $comments = Comment::all()->random();
            $comments->likes()->create([
                 'user_id' =>  User::all()->random()->id,
             ]);
         }


        //  for ($i = 0; $i < 50; $i++) {
        //     $Replay = Comment::all()->random()->comments();
        //     $Replay->likes()->create([
        //          'user_id' =>  User::all()->random()->id,
        //      ]);
        //  }

    }
    
}
