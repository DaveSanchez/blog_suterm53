<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\BirthDay;

class PostController extends Controller
{
    //
    public function index(){

        $bd = new BirthDay;

        $bds = $bd->ofThisMonth();

        $posts = DB::table('posts')
        ->join('users', 'posts.id_autor', '=', 'users.id')
        ->select('posts.*', 'users.name')
        ->paginate(2);

        return view('home',['posts' => $posts, 'bds' => $bds]);

    }

    public function showpublic($id){

        $post = DB::table('posts')
        ->join('users', 'posts.id_autor', '=', 'users.id')
        ->select('posts.*', 'users.name')
        ->where('posts.id','=',$id)
        ->first();

        $images = DB::table('images')
        ->where('id_post','=',$id)
        ->get();

        return view('admin.post_show_public',compact('post','images'));

    }

}
