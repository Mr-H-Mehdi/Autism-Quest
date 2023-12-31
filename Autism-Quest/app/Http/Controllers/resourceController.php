<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class resourceController extends Controller
{
    public function showSchools(){
        $educationalInstitutes = Resource::where('type', 'EDUCATIONAL_INSTITUTE')->paginate(3);

    return view('resources.showSchools', compact('educationalInstitutes'));
    }
    public function showHospitals(){
        $hospitals = Resource::where('type', 'HOSPITAL')->paginate(3);

    return view('resources.showHospitals', compact('hospitals'));
    }

    public function index(){
        return view('resources.index');
    }

    public function show(){
        $hospitals = Resource::where('type', 'HOSPITAL')->paginate(3);
        $educationalInstitutes = Resource::where('type', 'EDUCATIONAL_INSTITUTE')->paginate(3);

    return view('resources.show', compact('hospitals', 'educationalInstitutes'));
    }

    public function create(){
        return view('resources.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'type'=>['required'],
            'name' => ['required'],
            'location' => ['required'],
            'contact' => ['required'],
            'email' => ['required'],
            'description' => 'required|max:100'
            
        ]);

        if($request->hasFile('image')){

            $formFields['image'] = $request->file('image')->store('resourceImages','public');
        }
        $resource = Resource::create($formFields);

        
        return redirect("/resources");

    }
    public function edit($id){
        $resource = Resource::find($id);

        return view('resources.edit',compact('resource'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:100',
            'location' => 'required',
            'contact' => 'required',
            'email' => 'required',
        ]);

        $resource = Resource::find($id);


        $resource->type = $request->input('type');
        $resource->name = $request->input('name');
        $resource->description = $request->input('description');
        $resource->location =  $request->input('location');
        $resource->contact =  $request->input('contact');
        $resource->email =  $request->input('email');



        // Update image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('resource','public');
            $resource->image = $imagePath;
        }

        $resource->save();

        return redirect("/resources/show");
    }
    public function delete($id){
        $resource = Resource::find($id);
        $resource->delete();
        return redirect("/resources/show");
    }
}
