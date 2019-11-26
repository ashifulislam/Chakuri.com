<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\createEmployer;
use App\JobCategory;
class AddEmployerController extends Controller
{

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

        $addJobCategory=new createEmployer();
        if($request->input('password')!=$request->input('reType')){

            return redirect('/employerProfile')->with('passNotMatch','Password did not match');
        }

        elseif(createEmployer::where('email','=',$request->input('email'))->count()>0){
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
            return redirect('/employerProfile')->with('successfull','add Successfully');

        }
    }
}
