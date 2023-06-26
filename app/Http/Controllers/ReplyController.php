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
        $topic = Reply::with('user')->where('topic_id', $id)->get();
        if(!$topic){
            $topic = NULL;
            $totalRecords = 0;
        }
        // dd($topic);

        $totalRecords = count($topic);

        foreach ($topic as $reply) {
            $reply->topic_date = date('d-m-Y', strtotime($reply->created_at)); // Format: dd-mm-yyyy
            $reply->topic_time = date('H:i:s', strtotime($reply->created_at)); // Format: 21:00:00
        }

        $response = [
            'draw' => 1,
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $topic
        ];
        // dd($response);
        return response()->json($response);
    }
}