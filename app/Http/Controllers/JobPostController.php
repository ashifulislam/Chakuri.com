<?php

namespace App\Http\Controllers;

use App\JobCategory;
use App\JobPost;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Employer;
use Auth;
class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp_id=Auth::user()->id;
       $data['categories']=JobCategory::where('employerId',$emp_id)->get();
       return view('employer/employerJobPost',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'responsibilities'=>'required',
            'vacancy'=>'required',

            'location'=>'required',
            'salary'=>'required',
            'experience'=>'required',

            'myCheck'=>'required',

        ]);

        $addJobPost=new jobPost();

        $emp_id=Auth::user()->id;
        $addJobPost->responsibility=$request->input('responsibilities');
        $addJobPost->jobPosition=$request->input('jobPosition');
        $addJobPost->vacancy=$request->input('vacancy');
        $addJobPost->degreeType=$request->input('degreeType');
        $addJobPost->employmentStatus=$request->input('employmentStatus');
        $addJobPost->categoryTypeId=$request->input('categoryTypeId');
        $addJobPost->location=$request->input('location');
        $addJobPost->salary=$request->input('salary');
        $addJobPost->experience=$request->input('experience');

        $addJobPost->deadLine=$request->input('deadLine');
        $addJobPost->employerId=$emp_id;
        $addJobPost->save();
        $subscribers=Subscriber::all();
            return redirect()->route('jobPost.create')->with('successfull','add Successfully');

        }


    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
}
