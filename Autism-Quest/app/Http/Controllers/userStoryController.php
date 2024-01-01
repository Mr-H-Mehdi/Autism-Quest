<?php

namespace App\Http\Controllers;

use App\Models\userStory;
use Illuminate\Http\Request;

class userStoryController extends Controller
{
    // Display a paginated list of user stories
    public function index(){
        $records = userStory::paginate(3);
        return view('userStories.index', compact('records'));
    }

    // Show user-specific stories
    public function show(){
        $id = auth()->user()->id;
        $stories = userStory::where('user_id', $id)->paginate(3);
        return view('userStories.show', compact('stories'));
    }

    // Show the form to create a new user story
    public function create(){
        return view('userStories.create');
    }

    // Store a newly created user story in storage
    public function store(Request $request){
        $formFields = $request->validate([
            'user_id' => ['required'],
            'title' => ['required'],
            'tags' => ['required'],
            'story' => 'required|max:100'
        ]);

        // Store the user story image if provided
        if ($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('userStoryImages','public');
        }

        $userStory = UserStory::create($formFields);

        $id = auth()->user()->id;
        return redirect("/userStories/{$id}");
    }

    // Show the form to edit an existing user story
    public function edit($id){
        $story = userStory::find($id);
        return view('userStories.edit', compact('story'));
    }

    // Update the specified user story in storage
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'story' => 'required|max:100',
        ]);

        $story = userStory::find($id);
        $user_id = auth()->user()->id;

        // Update user story details
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

    // Delete the specified user story from storage
    public function delete($id){
        $story = userStory::find($id);
        $story->delete();
        $user_id = auth()->user()->id;
        return redirect("/userStories/{$user_id}");
    }
}
