<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
public function showHome(){

    $data['jobPosts']=JobPost::with(['employer','jobCategory'])->get();
    return view('employer.home',$data);
}
}
