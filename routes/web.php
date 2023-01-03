<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/login-failed', function () {
    return view('failedLogin');
});

Route::get('/logout', function () {
    session()->forget(['seeker','employer','companies','admin']);
    session()->flush();
    return redirect('/');
});

Route::get('/signup-Employee', function () {
    return view('signupEmp');
});

Route::get('/signup-Jobseeker', function () {
    return view('signupJob');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/verify', function () {
    return view('auth.verify');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/providerHome', function () {
    return view('providerHome');
});

Route::get('/seekerHome', function () {
    return view('seekerHome');
});

Route::get('/job-form', function () {
    return view('jobpost');
});

Route::get('/applied', function () {
    return view('applied-page');
});

Route::get('/admin-seekers', function () {
    return view('admin.seekers');
});


// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('login', [LoginController::class, 'login']);

Route::post('signup-Jobseeker', [SeekerController::class, 'register']);

Route::post('add-job',[JobController::class,'Register']);

Route::post('signup-Employee',[EmployerController::class,'Register']);

Route::post('signup-Company',[CompanyController::class,'Register']);

Route::get('seekerHome',[CompanyController::class, 'index']);

Route::get('admin-seekers',[SeekerController::class, 'index']);
Route::get('admin-employee',[EmployerController::class, 'index']);
Route::get('admin-companies',[CompanyController::class, 'indexSecond']);
Route::get('admin-jobs',[JobController::class, 'index']);



Route::post('save-seeker', [SeekerController::class, 'store']);
Route::post('save-job', [JobController::class, 'store']);
Route::post('save-employee', [EmployerController::class, 'store']);
Route::post('save-company', [CompanyController::class, 'store']);


Route::delete('job-delete/{id}', [JobController::class, 'delete']);

Route::delete('seeker-delete/{id}', [SeekerController::class, 'delete']);

Route::delete('employer-delete/{id}', [EmployerController::class, 'delete']);

Route::delete('company-delete/{id}', [CompanyController::class, 'delete']);

Route::get('admin-jobs/{id}', [JobController::class, 'edit']);

Route::put('update-job/{id}', [JobController::class, 'update']);