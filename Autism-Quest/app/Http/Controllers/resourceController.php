<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class resourceController extends Controller
{
    public function index(){
        $hospitals = Resource::where('type', 'HOSPITAL')->paginate(3);
        $educationalInstitutes = Resource::where('type', 'EDUCATIONAL_INSTITUTE')->paginate(3);

    return view('resources.index', compact('hospitals', 'educationalInstitutes'));
    }
}
