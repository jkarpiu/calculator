<?php

namespace App\Http\Controllers;

use Request;
use App\savedHistory;
use Auth;

class History extends Controller
{
    public function show() {
        if (Auth::user() !== null){
            return response()->json(savedHistory::where('userID', Auth::id())
                                                ->orderBy('created_at', 'desc')
                                                ->get());
        }
        else
            abort(401);
    }
    public function add() {
        if (Auth::user() !== null){
            $data = Request::only(['equasion', 'result']);
            $new = savedHistory::create([]);
            $new -> userID = Auth::id();
            $new -> equasion = $data['equasion'];
            $new -> result = $data['result'];
            $new -> save();
        }
        else
            abort(401);
    }


}
