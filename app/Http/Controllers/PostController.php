<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }
    public function all()
    {

        $post = Post::orderBy('summa', 'desc')->get();
        return view('posts.all', compact('post'));
    }

    public function store(Request $request)
    {

$user_id = Auth::user()->id;
        $time = time();
        $nomi = ''.$time.'.png';
              if($request->hasFile('rasmi')){

            $filenameWithExt = $request->file('rasmi')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('rasmi')->getClientOriginalExtension();
            $fileNameToStore = $filename.'.'.$extension;
            $path = $request->file('rasmi')->storeAs('public/post-photos',$nomi);
        }


        $product = Post::create([
        'nomi' => $request->nomi,
        'izox' => $request->izox,
        'rasm' =>  $nomi,
        'added' =>  $user_id,
            ]);
        return redirect('/post');
    }
    public function editpost(Request $request)
    {
$user_id = Auth::user()->id;
        $product = Post::find($request->id)->update([
        'nomi' => $request->nomi,
        'izox' => $request->izox,
        'summa' => $request->summa,
        'added' =>  $user_id,
            ]);
        return redirect('/post');
    }

    public function destroy($id)
    {
        $post = Post::destroy($id);
        return redirect('/post')->with('success','Post deleted successfully!');
    }
    public function edit($id)
    {
        $post = UserModel::where('id', $id)->get();
       return view('posts.edit', compact('post'));
    }
}
