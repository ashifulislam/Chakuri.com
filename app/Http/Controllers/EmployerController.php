<?php

namespace App\Http\Controllers;

use App\JobApplication;
use App\JobPost;
use Illuminate\Http\Request;
use App\Employer;
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
    public function createJobPost(Request $request){
//         echo $request->session()->get('user');
        return view('employer/employerJobPost');
    }
    public function addJobCategory(Request $request){

           $this->validate($request,[
            'categoryName'=>'required',
            'categoryType'=>'required',
               'myCheck'=>'required'
        ]);

           $emp_id=Auth::user()->id;
        $addJobCategory=new JobCategory();
        $addJobCategory->categoryName=$request->input('categoryName');
        $addJobCategory->categoryType=$request->input('categoryType');
        $addJobCategory->employerId=$emp_id;
        $addJobCategory->save();
        return redirect('/jobCategory')->with('successfull','Category Saved Successfully');
        }

    public function showEmployerList()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = DB::table('employers')->where('id' ,'=', $user_id)->get();
        if(count ($data)>0){
            return view('employer/show')->with('showEmployer',$data['data']);        }

    }


    public function updateEmployer($id){
        $addJobCategory=Employer::find($id);


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
        $updateEmployer=Employer::where('id',$id);
        $updateEmployer->update($update);
        return redirect('/show')->with('success','Updated Successfully');

    }
    public function deleteEmployer($id){

        $delete=Employer::where('id',$id);
        $delete->delete();
        return redirect('/show')->with('DeleteSuccess','Deleted Successfully');
    }


    public function showSingleInfo($id){
        $showEmployer=Employer::find($id);
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
    public function showPendingJobApplication(){
        $data['pendingPosts'] = JobApplication::where('status','pending')->with('candidate')->orderBy('id','DESC')->get();

        return view('employer.pendingJobApplication',$data);
    }
    public function updatePendingJobApplicationStatus(Request $request, $id){
        // dd($request->all());
        $jobApplication = JobApplication::findOrFail($id);
        $jobApplication->status = $request->input('status');
        $jobApplication->save();

        return redirect()->back();
    }
}
