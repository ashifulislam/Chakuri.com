<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

use App\Subscriber;


class SubscriberController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }



    public function delete($id){

        $delete=Subscriber::where('id',$id);
        $delete->delete();
        return redirect('/showSubscriber')->with('DeleteSuccess','Deleted Successfully');
    }
    public function showSubscribers()
    {

        $showSubscribers=Subscriber::all();


        return view('admin/showSubscribers',['showSubscribers'=>$showSubscribers]);

    }



}
