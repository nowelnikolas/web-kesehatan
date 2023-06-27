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

    public function create()
    {
        return view('article.create');
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
            // dd($request);

            $img = $request->file('img');

            if ($request->hasFile('img')) {
                $imgPath = 'assets/' . $img->getClientOriginalName();
                $img->move(public_path('assets'), $imgPath);
            }

            // dd($imgPath);

            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->image = $imgPath;
            $post->save();

            $post = Post::orderBy('created_at', 'desc')->get();
        return view('article.manage')->with("article", $post);

            //
          
        }

        public function createpost(Request $request)
        {

            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'excerpt' => 'required',
                'body' => 'required',
            ]);
            // dd($request);

            $img = $request->file('img');

            if ($request->hasFile('img')) {
                $imgPath = 'assets/' . $img->getClientOriginalName();
                if (file_exists(public_path($imgPath))) {
                    // Generate a unique identifier
                    $uniqueIdentifier = uniqid();
                    
                    // Get the file extension
                    $extension = $img->getClientOriginalExtension();
                    
                    // Generate the new file name with the unique identifier
                    $newImgName = pathinfo($imgPath, PATHINFO_FILENAME) . '_' . $uniqueIdentifier . '.' . $extension;
                    
                    // Append the new file name to the path
                    $newImgPath = str_replace(basename($imgPath), $newImgName, $imgPath);
                    
                    // Move the new file to the desired location with the new name
                    $img->move(public_path('assets'), $newImgPath);
                    
                    // Update the $imgPath variable with the new path
                    $imgPath = $newImgPath;
                } else {
                    // Move the new file to the desired location
                    $img->move(public_path('assets'), $imgPath);
                }
            }

            // dd($imgPath);

          
            $post = new Post([
                'title' => $request->title,
                'slug' =>  $request->slug,
                'image' => $imgPath,
                'excerpt' => $request->excerpt,
                'body' => $request->body,                
            ]);
        
            $post->save();

            $post = Post::orderBy('created_at', 'desc')->get();
            return view('article.manage')->with("article", $post);

            //
          
        }

       
}
