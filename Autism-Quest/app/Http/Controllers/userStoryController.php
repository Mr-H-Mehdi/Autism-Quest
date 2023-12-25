<?php

namespace App\Http\Controllers;

use App\Models\userStory;
use Illuminate\Http\Request;

class userStoryController extends Controller
{
    public function index(){
        $records = userStory::paginate(3);

        return view('userStories.index', compact('records'));
    }

    public function show(){
        $id = auth()->user()->id;
        $stories = userStory::where('user_id', $id)->paginate(3);

        return view('userStories.show',compact('stories'));

    }
}
