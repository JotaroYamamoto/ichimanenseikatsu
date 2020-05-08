<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        $posts=Post::all();
        $param=['posts'=>$posts,'user'=>$user];
        return view('posts.index',$param);
    }
    public function show(Request $request){
        $post=Post::find($request->id);
        $param=['post'=>$post];
        return view('posts.show',$param);
    }
    public function add(){
        return view('posts.add');
    }
    public function create(Request $request){
        $post=new Post;
        $post->title=$request->title;
        $post->mainimg=$request->mainimg;
        $post->text=$request->text;
        $post->cost=$request->cost;
        $post->save();
        return redirect('/');
    }

    public function edit(Request $request){
        $post=Post::find($request->id);
        $param=['post'=>$post];
        return view('posts.edit',$param);
    }
    public function update(Request $request){
        // hiddenで送信されたidでdbからデータ取得
        $post=Post::find($request->id);
        $post->title=$request->title;
        $post->mainimg=$request->mainimg;
        $post->text=$request->text;
        $post->cost=$request->cost;
        $post->save();
        return redirect('/');
    }
    public function delete(Request $request){
        $post=Post::find($request->id);
        $param=['post'=>$post];
        return view('posts.delete',$param);
    }
    public function remove(Request $request){
        Post::find($request-id)->delete();
        return redirect('/');
    }
}
