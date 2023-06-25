<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mood;

class MoodController extends Controller
{
    public function index()
    {
        $moods = Mood::orderBy('created_at', 'desc')->get();
        return view('moods.index', compact('moods'));
    }

    public function create()
    {
        return view('moods.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mood' => 'required'
        ]);
    
        $mood = new Mood([
            'mood' => $request->mood,
            'username' => auth()->user()->username
        ]);
    
        $mood->save();
    
        return redirect()->route('moods.index')->with('success', 'Mood berhasil ditambahkan.');
    }
}
