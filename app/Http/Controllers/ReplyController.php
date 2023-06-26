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
    
        $user = auth()->user();
         // Get the authenticated user
        $data = $request->all();
        $data['user_id'] = $user->id; // Assign the user's ID to the 'user_id' field
        
        $cek1 = $topic->id;
        // $cek2 = $user->id;
        $cek2 = Topic::where('id', $cek1)->first();
    

        $topic->replies()->create($data);
        // return redirect()->back();
        // return redirect()->back()->with('success', 'Balasan berhasil ditambahkan.');
        return view('topics.show')->with('id', $cek1)->with("topic", $cek2)->with('success', 'Balasan berhasil ditambahkan.');;
    }

    public function getReplies(Request $request)
    {
        $id = $request->id;
        $topic = Reply::where('topic_id', $id)->get();
        if(!$topic){
            $topic = NULL;
            $totalRecords = 0;
        }
        // dd($topic);

        $totalRecords = count($topic);

        $response = [
            'draw' => 1,
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $topic
        ];
    
        return response()->json($response);
    }
}