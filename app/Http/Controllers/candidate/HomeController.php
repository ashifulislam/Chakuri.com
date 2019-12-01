<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\JobCategory;
use App\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
public function showHome(){
    $data['categories']=JobCategory::all();
    $data['jobPosts']=JobPost::all();
    $data['recentJobs']=JobPost::with(['employer','jobCategory'])->orderBy('id','DESC')->limit(2)->get();
    $data['fullTimeJobs']=JobPost::with(['employer','jobCategory'])->where('employmentStatus','FullTime')->orderBy('id','DESC')->limit(2)->get();
    $data['partTimeJobs']=JobPost::with(['employer','jobCategory'])->where('employmentStatus','PartTime')->orderBy('id','DESC')->limit(2)->get();
   // dd( $data['partTimeJobs'])
    return view('employer.home',$data);
}
public function categoryWiseJobPosts($id){
    $data['jobPosts']=JobPost::with(['employer','jobCategory'])->where('categoryTypeId',$id)->orderBy('id','DESC')->get();
    return view('candidate.candidate',$data);
}
public  function showJobDetails($id){
    $data['singleJobPost'] = JobPost::findOrFail($id);
    return view('candidate.singleJob',$data);
}
public function searchjob(Request $request){
    $request->validate([
        'categoryTypeId' =>'required',
        'location' =>'required',
    ]);
    $data['jobPosts']=JobPost::with(['employer','jobCategory'])->Where('categoryTypeId',$request->categoryTypeId)->Where('location',$request->location)->orderBy('id','DESC')->get();
   // dd($data['jobPosts']);
    return view('candidate.searchResult',$data);
}
//public function jobApplication($id){
//    $jobPosts['jobPosts']=JobPost::with('employer')->find($id);
//
//    return view('candidate.jobApplicationForm',$jobPosts);
//}
}
