<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::withCount('replies')->orderByDesc('created_at')->get();
        // dd($topics);

        return view('topics.index')->with("topics", $topics);
    }

    public function create()
    {
        return view('topics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

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

        $topic = new Topic([
            'title' => $request->title,
            'content' =>  $request->content,
            'image' => $imgPath,       
        ]);
    
        $topic->save();
        
        return redirect()->route('topics.index')->with('success', 'Topik berhasil ditambahkan.');
    }

//     public function show(\App\Models\Topic $topic)
// {
//     return view('topics.show', compact('topic'));
// }
        function show(Request $request)
        {
            $id  = $request->idtop == null ? '' : $request->idtop;

            $topic = Topic::where('id', $id)->first();
            // $topics = Topic::withCount('replies')->orderByDesc('created_at')->get();
            // $judul  = $request->namevac == null ? '' : $request->namevac;


            return view('topics.show')->with('id', $id)->with("topic", $topic);
        }
}