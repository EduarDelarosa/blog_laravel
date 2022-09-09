<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PagesController extends Controller
{
    public function posts(){

        // return 'hola';
        // $posts = Post::All();
        Paginator::useBootstrap();
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    public function post(Post $post){
        return view('post', ['post' => $post]);
    }
}
