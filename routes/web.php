<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::view('dashboard', 'home');

//Route::view('customer/new','customer/new');
Route::get('customer/new/{customer}',[\App\Http\Controllers\CustomerController::class,'link']);
Route::post('customer/new/{customer}',[\App\Http\Controllers\CustomerController::class,'store2']);
Route::get('newshow',[\App\Http\Controllers\CustomerController::class,'saurav']);
Route::get('newshow/{customer}',[\App\Http\Controllers\CustomerController::class,'image']);
Route::get('newshow1/{sek}',[\App\Http\Controllers\CustomerController::class,'delete_fun']);
//Route::get('admin1/{pp}',[\App\Http\Controllers\CustomerController::class,'delete_rec']);



Route::get('profile',[\App\Http\Controllers\CustomerController::class,'pro']);
Route::get('profile/{pro}',[\App\Http\Controllers\CustomerController::class,'edit1']);
Route::patch('profile/{pro}',[\App\Http\Controllers\CustomerController::class,'update']);



Route::get('newshow/{nn}',[\App\Http\Controllers\CustomerController::class,'edit2']);
Route::patch('newshow/{nn}',[\App\Http\Controllers\CustomerController::class,'update2']);
Route::get('newshow4/email',[\App\Http\Controllers\CustomerController::class,'email']);
Route::post('newshow4/email',[\App\Http\Controllers\CustomerController::class,'sendmail']);



Route::get('recruiter',[\App\Http\Controllers\CustomerController::class,'rec_form']);
Route::post('recruiter',[\App\Http\Controllers\CustomerController::class,'store4']);
Route::get('admin1/{nn}',[\App\Http\Controllers\CustomerController::class,'edit3']);
Route::patch('admin1/{nn}',[\App\Http\Controllers\CustomerController::class,'update3']);
Route::view('dd','dd');
//Route::get('admin1/{pp}',[\App\Http\Controllers\CustomerController::class,'delete_rec']);



Route:: get('customer',[\App\Http\Controllers\CustomerController::class,'index']);
Route:: get('customer/create',[\App\Http\Controllers\CustomerController::class,'create']);
Route:: post('customer',[\App\Http\Controllers\CustomerController::class,'store']);

Route:: get('customer/{customer}',[\App\Http\Controllers\CustomerController::class,'show']);
Route:: get('customer/{customer}/edit',[\App\Http\Controllers\CustomerController::class,'edit']);
//Route:: patch('customer/{customer}',[\App\Http\Controllers\CustomerController::class,'update']);
Route:: delete('customer/{customer}',[\App\Http\Controllers\CustomerController::class,'destroy']);
Route:: post('new_search', [\App\Http\Controllers\CustomerController::class, 'SEARCH']);
//Route::resource('customer', \App\Http\Controllers\CustomerController::class)->shallow()->middleware(['verified']);
//Route::get('new',\App\Http\Controllers\CustomerController::class,'link');

Route::post('new_search2', [\App\Http\Controllers\CustomerController::class, 'SEARCH2']);



Route::get('admin',[\App\Http\Controllers\CustomerController::class,'user1']);
Route::get('contact', [\App\Http\Controllers\CustomerController::class,'user']);
Route::post('contact',[\App\Http\Controllers\CustomerController::class,'store1']);
//Route::view('profile', 'profile');
//Route::get('profile',[\App\Http\Controllers\ProfileController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
});
//Route::middleware(['auth:sanctum', 'verified'])->get('/newshow', function () {
//    return view('home');
//});
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
//    return view('home');
//});
//Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
//    return view('home');
//});
