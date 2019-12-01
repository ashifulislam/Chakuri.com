<?php

namespace App\Http\Controllers;

use App\JobApplication;
use App\JobPost;
use Illuminate\Http\Request;
use App\Candidate;
use App\JobCategory;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Auth;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:candidate');
    }
    public function candidateHome(){
        return view('candidate/candidateHome');
    }
    public function showCandidate()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = DB::table('candidates')->where('id', '=', $user_id)->get();
        if (count($data) > 0) {


            return view('candidate/viewYourProfile')->with('showCandidate', $data['data']);
        }
    }
    public function showCandidateForUpdate()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = DB::table('candidates')->where('id', '=', $user_id)->get();
        if (count($data) > 0) {


            return view('candidate/show')->with('showCandidate', $data['data']);
        }
    }
    public function updateCandidate($id){
        $returnValue=Candidate::find($id);



        return view('candidate/updateCandidateProfile',['updateCandidateProfile'=>$returnValue]);

    }
    public function editCandidate(Request $request,$id){
        $this->validate($request,[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'institute'=>'required',
            'org'=>'required',
            'address'=>'required',
            'softSkills'=>'required',
            'skill_name'=>'required',
            'myCheck'=>'required'

        ]);


        $update=array('firstName'=>$request->input('firstName'),'lastName'=>$request->input('lastName'),'email'=>$request->input('email'),
            'degree'=>$request->input('degreeType'),
            'institute'=>$request->input('institute'),
            'title'=>$request->input('jobTitle'),
            'org'=>$request->input('org'),
            'address'=>$request->input('address'),
            'softSkills'=>$request->input('softSkills'),
            'skill_name'=>$request->input('softSkills')
            );
        $updateCandidate=Candidate::where('id',$id);
        $updateCandidate->update($update);
        return redirect('/showForUpdate')->with('success','Updated Successfully');

    }
    public function deleteCandidate($id){

        $delete=Candidate::where('id',$id);
        $delete->delete();
        return redirect('/showForUpdate')->with('DeleteSuccess','Deleted Successfully');
    }
    public function showApplicationForm(){
        return view('candidate/jobApplicationForm');
}
    public function jobApplication($id){
        $jobPosts['jobPosts']=JobPost::with('employer')->find($id);
        return view('candidate.jobApplicationForm',$jobPosts);
    }

    public function jobConfirmation(){

        $user_id = Auth::user()->id;

        $jobPosts['appliedJobs']=JobApplication::where('candidateId',$user_id)->with(['jobPost'=>function($query){
            return $query->with(['employer','jobCategory']);}])->orderBy('id','DESC')->get();
        return view('candidate.applyConfirmation',$jobPosts);
    }
}



