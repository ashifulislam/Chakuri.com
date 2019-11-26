<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\createEmployer;
use App\JobCategory;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Auth;

class EmployerController extends Controller
{

    public function createJobCategory(Request $request){
//         echo $request->session()->get('user');
          return view('employer/jobCategory')->with('email',$request->session()->get('user'));
    }
    public function addJobCategory(Request $request){

           $this->validate($request,[
            'categoryName'=>'required',
            'categoryType'=>'required',
               'myCheck'=>'required'
        ]);

        $addJobCategory=new JobCategory();
        $addJobCategory->categoryName=$request->input('categoryName');
        $addJobCategory->categoryType=$request->input('categoryType');
        $addJobCategory->save();
        return redirect('/createJobCategory')->with('successfull','Category Saved Successfully');
        }

    public function showEmployerList()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = DB::table('create_Employers')->where('id' ,'=', $user_id)->get();
        if(count ($data)>0){
            return view('employer/show')->with('showEmployer',$data['data']);        }

    }


    public function updateEmployer($id){
        $addJobCategory=createEmployer::find($id);


  return view('employer/updateEmployerProfile',['updateEmployerProfile'=>$addJobCategory]);

    }
    public function editEmployer(Request $request,$id){
        $this->validate($request,[
            'FirstName'=>'required',
            'LastName'=>'required',
            'CompanyName'=>'required',
            'CompanyDetails'=>'required',
            'CompanyCountry'=>'required',
            'CompanyState'=>'required',
            'CompanyZipCode'=>'required',
            'myCheck'=>'required'

        ]);


        $update=array('firstName'=>$request->input('FirstName'),'lastName'=>$request->input('LastName'),'companyName'=>$request->input('CompanyName'),
                     'companyDetails'=>$request->input('CompanyDetails'),
                     'companyCountry'=>$request->input('CompanyCountry'),
                     'companyState'=>$request->input('CompanyState'),
                     'companyZipCode'=>$request->input('CompanyZipCode'));
        $updateEmployer=createEmployer::where('id',$id);
        $updateEmployer->update($update);
        return redirect('/show')->with('success','Updated Successfully');

    }
    public function deleteEmployer($id){

        $delete=createEmployer::where('id',$id);
        $delete->delete();
        return redirect('/show')->with('DeleteSuccess','Deleted Successfully');
    }


    public function showSingleInfo($id){
        $showEmployer=createEmployer::find($id);
       return view('employer/viewSingleInfo',['viewSingleInfo'=>$showEmployer]);
    }

    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employer/admin_home');
    }
}
