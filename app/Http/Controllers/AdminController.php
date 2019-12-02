<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;
use App\Candidate;
use App\JobCategory;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function adminHome(){
        return view('admin/adminHome');
    }
    public function showCandidates()
    {
        //
      $showCandidates=Candidate::all();


        return view('admin/showCandidates',['showCandidates'=>$showCandidates]);

    }
    public function showSingleInfo($id){
        $showCandidate=Candidate::find($id);
        return view('admin/viewSingleInfo',['viewSingleInfo'=>$showCandidate]);
    }


    public function showPendingPosts(){
        $data['pendingPosts'] = JobPost::where('status','pending')->with('employer')->orderBy('id','DESC')->get();
        return view('admin.pendingJobPosts',$data);
    }
    public function showApprovedPosts(){
        $data['pendingPosts'] = JobPost::where('status','approved')->with('employer')->orderBy('id','DESC')->get();

        return view('admin.approveJobPosts',$data);
    }
    public function updatePendingPostStatus(Request $request, $id){
       // dd($request->all());
        $jobPost = JobPost::findOrFail($id);
        $jobPost->status = $request->input('status');
        $jobPost->save();

        return redirect()->back();
    }
    public function deletePostStatus($id){
        JobPost::destroy($id);
        return redirect()->back();

    }

}



