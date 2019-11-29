<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;
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
    }



