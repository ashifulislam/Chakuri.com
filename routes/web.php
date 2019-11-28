<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/adminHome',function(){
    return view('admin/admin');
});

Route::get('/jobApplication',function(){
    return view('employer/jobApplication');
});

Route::get('/jquery',function(){
    return view('employer/jquery');
});
Route::get('/primaryJobInfo','Employer\jobPostController@showPrimaryJobInfo');
Route::get('/additionalJobInfo','Employer\jobPostController@showAdditionalInfo');
Route::get('/candidateReq','Employer\jobPostController@showCandidateInfo');
Route::get('/employerProfile','Employer\AddEmployerController@showEmployer');
Route::post('/addEmployerOperation','Employer\AddEmployerController@addEmployer');
Route::post('/addEmployerOperation','Employer\AddEmployerController@addEmployer');
Route::get('/showEmployerList','EmployerController@showEmployerList');
Route::get('/jobPost','EmployerController@createJobPost')->name('jobPost');
Route::get('/show','EmployerController@showEmployerList')->name('employer.show');
Route::get('/updateEmployerProfile/{id}','EmployerController@updateEmployer');
Route::post('/edit/{id}','EmployerController@editEmployer');
Route::get('/deleteEmployerProfile/{id}','EmployerController@deleteEmployer');
//Route::get('/logInForEmployer','EmployerController@showLoginForm');
//Route::post('/loginOperationForEmployer','EmployerController@performLogin');
Route::get('/viewSingleInfo/{id}','EmployerController@showSingleInfo');
Route::get('/createJobCategory','EmployerController@createJobCategory')->name('employer.category');
Route::post('/addJobCategory','EmployerController@addJobCategory');

Route::get('/updateEmployerProfile',function(){
    return view('user/updateEmployerProfile');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@UserLogout')->name('employer.logout');
Route::get('/prince','EmployerController@show')->name('employer.prince');
Route::group(['prefix'=>'employer'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'Employer\LoginController@showLoginForm')->name('employer.login');
    Route::post('/login', 'Employer\LoginController@login')->name('employer.login.submit');
    Route::get('logout', 'Employer\LoginController@logout')->name('employer.logout');
});
Route::get('/homePage','Employer\AddEmployerController@showHome');
Route::get('/angular',function(){

});
