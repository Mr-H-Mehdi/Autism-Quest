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

    public function create(){
        return view('userStories.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'user_id'=>['required'],
            'title' => ['required'],
            'tags' => ['required'],
            'story' => 'required|max:100'
            
        ]);

        if($request->hasFile('image')){

            $formFields['image'] = $request->file('image')->store('userStoryImages','public');
        }
        $userStory = UserStory::create($formFields);

        $id = auth()->user()->id;

        // if($request->hasFile('image')){
        //     $formFields['image'] = $request->file('image')->store('userStoryImages','public');
        // }
        
        return redirect("/userStories/{$id}");

    }

    public function edit($id){
        $story = userStory::find($id);

        return view('userStories.edit',compact('story'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'story' => 'required',
        ]);

        $story = userStory::find($id);

        $user_id = auth()->user()->id;


        $story->title = $request->input('title');
        $story->tags = $request->input('tags');
        $story->story = $request->input('story');

        // Update image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('userStoryImages','public');
            $story->image = $imagePath;
        }

        $story->save();

        return redirect("/userStories/{$user_id}");
    }

    public function delete($id){
        $story = userStory::find($id);
        $story->delete();
        $user_id = auth()->user()->id;
        return redirect("/userStories/{$user_id}");
    }
}
