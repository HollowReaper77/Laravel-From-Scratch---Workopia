<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function () {
    return 'Available Jobs';
})->name('jobs');
//Illuminate\Http\request $request
Route::get('/test', function(Request $request){
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function(Request $request){
    //return $request->query('name');
    //return $request->only(['name', 'age']);
    //return $request->all();
    //return $request->has('name');
    //return $request->input('name', 'Default name');
    return $request->except(['name']);
    
});