<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\JobApplication;
use Illuminate\Http\Request;
use Auth;

class jobApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:candidate');
    }
    public function jobApplied(Request $request){

        $this->validate($request,[
            'salary'=>'required',
            'interest'=>'required',
        ]);

            $applyJob=new JobApplication();

            $applyJob->salary=$request->input('salary');
            $applyJob->interest=$request->input('interest');
            $applyJob->jobPostId = $request->input('jobPostId');
            $cand_id=Auth::user()->id;
            $applyJob->candidateId =$cand_id;
            $applyJob->status ='pending';

            $applyJob->save();
           return redirect()->route('application.confirm')->with("Success","Successfull");
        }
        public function showConfirmation(){

        }

}
