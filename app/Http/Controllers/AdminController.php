<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Fecades\Storage;
use App\Post;
use App\Images;
use App\User;
use App\Messages;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

        $messages = DB::table('messages')->orderBy('created_at','desc')->take(3)->get();

        $last_3post = DB::table('posts')
        ->join('users', 'posts.id_autor', '=', 'users.id')
        ->select('posts.*', 'users.name')->orderBy('created_at','desc')->take(3)->get();
        
       // Post::orderBy('created_at','desc')->take(3)->get();

        return view('admin.index',compact('last_3post','messages'));

    }

    public function post_create(){
        
        return view('admin.post_create');

    }

    public function post_store(Request $request ){

        $messages = [
            'name.required' => 'Este campo es requerido',
            'description.required' => 'Este campo es requerido',
        ];

        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
        ],$messages);

        $post = new Post;
        $post->title = $request->name;
        $post->description = $request->description;
        $post->id_autor = $request->user()->id;
        $photos = $request->file('archivos');
        
        
        if($post->save()) {
            //$image = new Images;
            $idpost = $post->id;
            
            foreach ($photos as $photo){
                
                $filename = $photo->store('photos');

                Images::create([
                    'id_post' => $idpost,
                    'path' => $filename
                ]);

            }
        
            $request->session()->flash('success','¡Publicación exitosa!');    

        }else {

            $request->session()->flash('success','¡Publicación fallida!');               
        
        }

        return redirect()->route('post.create');

    }

    public function post_list(){

        $admin = Auth::user()->admin;

        
        $posts_for_admin = DB::table('posts')
        ->join('users', 'posts.id_autor', '=', 'users.id')
        ->select('posts.*', 'users.name')->get();

        $my_posts = DB::table('posts')
        ->join('users', 'posts.id_autor', '=', 'users.id')
        ->select('posts.*', 'users.name')
        ->where('users.id','=',Auth::user()->id)
        ->get();

        $posts = $admin ? $posts_for_admin : $my_posts;
        
        return view('admin.post_list',compact('posts'));

    }

    public function post_show(){

    }

    public function user_list(){

        $users = User::where('id','!=',Auth::id())->get();

        return view('admin.user_list', compact('users'));

    }


}
