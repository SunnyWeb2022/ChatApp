<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class userController extends Controller
{
    public function index(){
        return response()->json(User::all());
    }
    
    public function store(Request $request)
    {
        dd($request->all());
    }
}
