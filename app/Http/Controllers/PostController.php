<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table("posts")->get();
        return view("posts.index",compact("posts"));
    }

    public function show($id) {
        $posts = Post::find($id);
        return view("posts.show",compact("posts"));
    }
}
