<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {


        return view ('home', [
            "title" => "Home",
            "active" => 'home',
            "home" => Post::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'home',
            'post' => $post
        ]);
    }

    public function article()
    {
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('article.manage')->with("article", $post);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->back()->with('success', 'Post deleted successfully.');
        }
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('article.manage')->with("article", $post);
    }

    function edit(Request $request)
        {
            $id  = $request->idarc == null ? '' : $request->idarc;

            $post = Post::where('id', $id)->first();
            // $topics = Topic::withCount('replies')->orderByDesc('created_at')->get();
            // $judul  = $request->namevac == null ? '' : $request->namevac;
            
            return view('article.edit')->with('id', $id)->with("post", $post);
        }

        public function editpost(Request $request)
        {
            $post = Post::find($request->id);

            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'excerpt' => 'required',
                'body' => 'required',
            ]);

            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->save();

            $post = Post::orderBy('created_at', 'desc')->get();
        return view('article.manage')->with("article", $post);

            //
          
        }

       
}
