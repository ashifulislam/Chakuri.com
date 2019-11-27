<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employer')->except('logout');
    }
    public function showLoginForm()
    {
        return view('employer.login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|string',
            'password'=>'required|string',
        ]);

        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        // dd($credentials);
        if(Auth::guard('employer')->attempt($credentials,$request->remember)){
            return redirect()->intended(route('employer.show'));
        }
        return redirect()->back()->withInput($request->only('email,remember'));
    }
    public function logout(Request $request){
        Auth::guard('employer')->logout();
        return redirect('/');
    }
}
