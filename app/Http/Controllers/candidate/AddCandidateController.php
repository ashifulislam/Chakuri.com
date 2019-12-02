<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Candidate;
class AddCandidateController extends Controller
{
   public function showHome(){
       return view('candidate/home');
   }
    public function showCandidate(Request $request){

        return view('candidate/candidateProfile');

    }
    public function addCandidate(Request $request){
        $this->validate($request,[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'password'=>'required|min: 4|',
            'reType'=>'required',
            'institute'=>'required',
            'org'=>'required',
            'address'=>'required',
            'softSkills'=>'required',
            'skill_name'=>'required',
            'myCheck'=>'required'

        ]);

        $addCandidate=new Candidate();
        if($request->input('password')!=$request->input('reType')){

            return redirect('/candidateProfile')->with('passNotMatch','Password did not match');
        }

        elseif(Candidate::where('email','=',$request->input('email'))->count()>0){
            return redirect('/candidateProfile')->with('emailExists','This email is already taken');
        }else{

            $addCandidate->firstName=$request->input('firstName');
            $addCandidate->lastName=$request->input('lastName');
            $addCandidate->email=$request->input('email');
            $addCandidate->password=bcrypt($request->input('password'));
            $addCandidate->degree=$request->input('degreeType');
            $addCandidate->From=$request->input('From');
            $addCandidate->To=$request->input('To');
            $addCandidate->institute=$request->input('institute');
            $addCandidate->title=$request->input('jobTitle');
            $addCandidate->eFrom=$request->input('eFrom');
            $addCandidate->eTo=$request->input('eTo');
            $addCandidate->org=$request->input('org');
            $addCandidate->address=$request->input('address');

            $addCandidate->softSkills=$request->input('softSkills');
            $addCandidate->skill_name=$request->input('skill_name');


            $addCandidate->save();
           Toastr::success('candidate added successfully saved:)','success');
            return redirect('/candidateProfile');

        }
    }
}
