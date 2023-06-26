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

        Topic::create($request->all());
        
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