<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }
    public function all()
    {
        $post = Post::All();
        return view('posts.all', compact('post'));
    }

    public function store(Request $request)
    {
              if($request->hasFile('rasmi')){

            $filenameWithExt = $request->file('rasmi')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('rasmi')->getClientOriginalExtension();
            $fileNameToStore = $filename.'.'.$extension;
            $path = $request->file('rasmi')->storeAs('public/post-photos',$fileNameToStore);
        }


        $product = Post::create([
        'nomi' => $request->nomi,
        'izox' => $request->izox,
        'rasm' =>  $fileNameToStore ?? null,
            ]);
        return redirect('/post');
    }

    public function destroy($id)
    {
        $post = Post::destroy($id);
        return redirect('/post')->with('success','Post deleted successfully!');
    }
}
