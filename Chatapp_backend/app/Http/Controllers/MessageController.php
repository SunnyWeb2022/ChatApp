<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(){
        return response()->json(Message::all());
    }

    public function store(Request $request)
    {
        Message::create([
            'sender_id' => $request->sender_id,
            'recever_id' => $request->recever_id,
            'message' => $request->message,
        ]);

        return response()->json(Message::latest()->first());
    } 
}
