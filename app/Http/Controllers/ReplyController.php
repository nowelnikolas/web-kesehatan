<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Topic;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, Topic $topic)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $topic->replies()->create($request->all());

        return redirect()->back()->with('success', 'Balasan berhasil ditambahkan.');
    }
}