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
Route::get('/employerProfile','Employer\AddEmployerController@showEmployer');
Route::post('/addEmployerOperation','Employer\AddEmployerController@addEmployer');
Route::post('/addEmployerOperation','Employer\AddEmployerController@addEmployer');
Route::get('/candidateProfile','Candidate\AddCandidateController@showCandidate')->name('candidate.profile');
Route::post('/addCandidateOperation','Candidate\AddCandidateController@addCandidate');
Route::get('/showEmployerList','EmployerController@showEmployerList');

//Route::get('/jobPost','EmployerController@createJobPost')->name('jobPost');
Route::get('/show','EmployerController@showEmployerList')->name('employer.show');
Route::get('/showCandidate','CandidateController@showCandidate')->name('candidate.show');
Route::get('/updateEmployerProfile/{id}','EmployerController@updateEmployer');
Route::post('/edit/{id}','EmployerController@editEmployer');
Route::post('/editCandidate/{id}','CandidateController@editCandidate');
Route::get('/deleteEmployerProfile/{id}','EmployerController@deleteEmployer');
Route::get('/deleteCandidateProfile/{id}','CandidateController@deleteCandidate');
Route::get('/showForUpdate','CandidateController@showCandidateForUpdate')->name('update.show');
Route::get('/updateCandidateProfile/{id}','CandidateController@updateCandidate');

Route::get('/viewSingleInfo/{id}','EmployerController@showSingleInfo');
Route::get('/viewSingleInfoCandidate/{id}','AdminController@showSingleInfo');
Route::get('/createJobCategory','EmployerController@createJobCategory')->name('employer.category');
Route::post('/addJobCategory','EmployerController@addJobCategory');
Route::resource('jobPost','JobPostController');
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
Route::group(['prefix'=>'candidate'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'Candidate\LoginController@showLoginForm')->name('candidate.login');
    Route::post('/login', 'Candidate\LoginController@login')->name('candidate.login.submit');
    Route::get('logout', 'Candidate\LoginController@logout')->name('candidate.logout');
});
Route::group(['prefix'=>'admin'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'admin\LoginController@login')->name('admin.login.submit');
    Route::get('logout', 'admin\LoginController@logout')->name('admin.logout');
});
Route::get('/homePage','candidate\HomeController@showHome')->name('home.page');
Route::get('/category/posts/{id}','candidate\HomeController@categoryWiseJobPosts')->name('category.jobPosts');
Route::post('/job/search','candidate\HomeController@searchjob')->name('job.search');
Route::get('/postDetails/{id}','candidate\HomeController@showJobDetails')->name('post.details');
Route::get('/angular',function(){

});
Route::get('/candidateHome','CandidateController@candidateHome')->name('candidate.home');
Route::get('/adminHome','AdminController@adminHome')->name('admin.home');
Route::get('/showCandidates','AdminController@showCandidates')->name('admin.show');
Route::post('/subscriber','SubscriberController@store')->name('subscriber.store');

Route::get('/userSubscriber','admin\SubscriberController@showSubscribers')->name('subscriber.show');

Route::get('/deleteSubscriber/{id}','admin\SubscriberController@delete')->name('subscriber.delete');

Route::get('/jobApplication/{id}','CandidateController@jobApplication')->name('application.show');

Route::post('/jobApplication','candidate\jobApplyController@jobApplied')->name('application.store');
Route::get('/jobConfirmation','CandidateController@jobConfirmation')->name('application.confirm');
