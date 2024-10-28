<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Mail;
use App\Mail\chatMailable;
use Illuminate\Http\Request;
use App\Models\Member;

class memberController extends Controller
{
    public function index()
    {
        return response()->json(Member::all());
    }
    public function store(Request $request)
    {

        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // $details = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        // ];

        // Mail::to('sunnykrdbg2002@gmail.com')->send(new chatMailable($details));

        return response()->json('SuccessFully Submited Form');
    }
}
