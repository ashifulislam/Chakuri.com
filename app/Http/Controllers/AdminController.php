<?php

namespace App\Http\Controllers;

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


}



