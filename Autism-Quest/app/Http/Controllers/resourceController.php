<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class resourceController extends Controller
{
    // Show a paginated list of educational institutes
    public function showSchools(){
        $educationalInstitutes = Resource::where('type', 'EDUCATIONAL_INSTITUTE')->paginate(3);

        return view('resources.showSchools', compact('educationalInstitutes'));
    }

    // Show a paginated list of hospitals
    public function showHospitals(){
        $hospitals = Resource::where('type', 'HOSPITAL')->paginate(3);

        return view('resources.showHospitals', compact('hospitals'));
    }

    // Show the index page
    public function index(){
        return view('resources.index');
    }

    // Show a paginated list of both hospitals and educational institutes
    public function show(){
        $hospitals = Resource::where('type', 'HOSPITAL')->paginate(3);
        $educationalInstitutes = Resource::where('type', 'EDUCATIONAL_INSTITUTE')->paginate(3);

        return view('resources.show', compact('hospitals', 'educationalInstitutes'));
    }

    // Show the form to create a new resource
    public function create(){
        return view('resources.create');
    }

    // Store a new resource in the database
    public function store(Request $request){
        $formFields = $request->validate([
            'type'=>['required'],
            'name' => ['required'],
            'location' => ['required'],
            'contact' => ['required'],
            'email' => ['required'],
            'description' => 'required|max:100'
        ]);

        // If an image is uploaded, store it in the 'resourceImages' directory
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('resourceImages','public');
        }

        // Create a new resource with the form data
        $resource = Resource::create($formFields);

        // Redirect to the resources index page
        return redirect("/resources");
    }

    // Show the form to edit a resource
    public function edit($id){
        $resource = Resource::find($id);

        return view('resources.edit',compact('resource'));
    }

    // Show the details of a resource
    public function view($id){
        $resource = Resource::find($id);

        return view('resources.view',compact('resource'));
    }

    // Update an existing resource in the database
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:100',
            'location' => 'required',
            'contact' => 'required',
            'email' => 'required',
        ]);

        // Find the resource with the given ID
        $resource = Resource::find($id);

        // Update resource attributes with the request data
        $resource->type = $request->input('type');
        $resource->name = $request->input('name');
        $resource->description = $request->input('description');
        $resource->location =  $request->input('location');
        $resource->contact =  $request->input('contact');
        $resource->email =  $request->input('email');

        // Update the image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('resource','public');
            $resource->image = $imagePath;
        }

        // Save the updated resource
        $resource->save();

        // Redirect to the resources show page
        return redirect("/resources/show");
    }

    // Delete a resource from the database
    public function delete($id){
        $resource = Resource::find($id);
        $resource->delete();
        
        // Redirect to the resources show page
        return redirect("/resources/show");
    }
}
