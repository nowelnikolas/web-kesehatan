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

    public function activity()
    {
        return view('moods.activity');
    }

    public function result()
    {
        $user = auth()->user();
        $mood = Mood::where('username', $user->username)->orderBy('created_at', 'desc')->first();
        $timestamp = strtotime($mood->created_at);
        $day = date('l', $timestamp);
        $dated = date('d', $timestamp);
        $datem = date('F', $timestamp);
        $datey = date('Y', $timestamp);
        return view('moods.result')->with("mood", $mood)->with("day", $day)->with("dated", $dated)->with("datem", $datem)->with("datey", $datey);
    }

    public function history()
    {
        $user = auth()->user();
        $mood = Mood::where('username', $user->username)->get();
        // $day = date('l', $mood->create_at);
        // $dated = date('d', $mood->create_at);
        // $datem = date('F', $mood->create_at);
        // $datey = date('Y', $mood->create_at);
        return view('moods.history')->with("mood", $mood);
    }

    public function store(Request $request)
    {   
        $request->validate([
            'mood' => 'required',
            // 'img' => 'required'
        ]);
        // dd($request);
        if($request->mood == 'Awfull'){
            $img = 'assets/awful.jpg';
        }
        if($request->mood == 'Bad'){
            $img = 'assets/sad.jpeg';
        }
        if($request->mood == 'Fine'){
            $img = 'assets/fine.jpeg';
        }
        if($request->mood == 'Good'){
            $img = 'assets/great.jpeg';
        }
        if($request->mood == 'Angry'){
            $img = 'assets/angry.jpeg';
        }
    
        $mood = new Mood([
            'mood' => $request->mood,
            'img' => $img,
            'username' => auth()->user()->username,
        ]);
    
        $mood->save();
    
        return redirect()->route('moods.activity')->with('success', 'Mood berhasil ditambahkan.');
    }

    public function storetodo(Request $request)
    {
        $request->validate([
            'todo' => 'required'
        ]);

        // dd($request);
        
        $user = auth()->user();
        $mood = Mood::where('username', $user->username)->latest()->first();
        
        // if ($mood) {
        $mood->todo = $request->todo;
        $mood->save();
        // } else {
            // Handle the case when no mood record exists for the authenticated user
        // }
    
        return redirect()->route('moods.result')->with('success', 'Mood berhasil ditambahkan.');
    }
}
