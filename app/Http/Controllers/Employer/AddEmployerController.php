<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Employer;
use App\JobCategory;
class AddEmployerController extends Controller
{
   public function showHome(){
       return view('employer/home');
   }
    public function showEmployer(Request $request){

        return view('employer/employerProfile');

    }
    public function addEmployer(Request $request){
        $this->validate($request,[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'password'=>'required|min: 4|',
            'reType'=>'required',
            'companyName'=>'required',
            'companyDetails'=>'required',
            'companyCountry'=>'required',
            'companyState'=>'required',
            'companyZipCode'=>'required',
            'myCheck'=>'required'

        ]);

        $addJobCategory=new Employer();
        if($request->input('password')!=$request->input('reType')){

            return redirect('/employerProfile')->with('passNotMatch','Password did not match');
        }

        elseif(Employer::where('email','=',$request->input('email'))->count()>0){
            return redirect('/employerProfile')->with('emailExists','This email is already taken');
        }else{

            $addJobCategory->firstName=$request->input('firstName');
            $addJobCategory->lastName=$request->input('lastName');
            $addJobCategory->email=$request->input('email');
            $addJobCategory->password=bcrypt($request->input('password'));
            $addJobCategory->companyName=$request->input('companyName');
            $addJobCategory->companyDetails=$request->input('companyDetails');
            $addJobCategory->companyCountry=$request->input('companyCountry');
            $addJobCategory->companyState=$request->input('companyState');
            $addJobCategory->companyZipCode=$request->input('companyZipCode');
            $addJobCategory->save();
            Toastr::success('candidate added successfully saved:)','success');

            return redirect('/employerProfile');

        }
    }
}
