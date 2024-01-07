<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        blog::latest()->paginate(15);
        return view('dashboard.blogs.index');
    }

    public function show(blog $blog){
        return view('dashboard.blogs.show',[
            'blog' => $blog
        ]);
    }
    public function create(){
        return view('dashboard.blogs.create');
    }
    
    public function store(){
        
    }
}
