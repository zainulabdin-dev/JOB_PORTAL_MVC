<?php

use App\Http\Controllers\typeformController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

//admin route
Route::get('/admin',[userController::class,'index']);
//website all pages route
Route::get('/',[userController::class,'website'])->name('home');
Route::get('/joblist',function(){
    return redirect()->route('alljoblist1');})->name('joblist');
Route::get('/jobdetail',function(){
    return view('user.job_detail');})->name('jobdetail');
Route::get('/about',function(){
    return view('user.about');
})->name('about');
//job_type insert
Route::get('job/insert',[typeformController::class,'typeform'])->name('insertedtype');
Route::post('/jobtype/insert',[typeformController::class,'jobtypeinsert'])->name('jobtype');
Route::get('/alltypejob',[typeformController::class,'fatch'])->name('alljobtype');
//job by category
Route::get('/job/category',[typeformController::class,'category'])->name('jobcat');
Route::get('/alljoblist',[typeformController::class,'alljoblist'])->name('alljoblist1');
Route::get('/home',[typeformController::class,'home'])->name('home');
Route::get('jobbyid/{id}',[typeformController::class,'jobbyid'])->name('job_by_id');
Route::post('/job/apply',[typeformController::class,'applyjob'])->name('applying');
Route::get('/all/job/applies',[typeformController::class,'applyfatch'])->name('alljobapplies');
