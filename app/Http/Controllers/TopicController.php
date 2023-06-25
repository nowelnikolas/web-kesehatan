<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::withCount('replies')->orderByDesc('created_at')->get();

        return view('topics.index', compact('topics'));
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

    public function show(\App\Models\Topic $topic)
{
    return view('topics.show', compact('topic'));
}
}