<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function () {
    return 'Available Jobs';
})->name('jobs');

//post volt eslőneka patch helyet, vagy lehet any is a match és az első paraméternek a ([get, put]) helyet
Route::any('/submit', function(){
    return 'submit';
});

Route::get('/test', function(){
    $url = route('jobs');
    return "<a href='$url'>Click Here </a>";
});

Route::get('/api/users', function(){
    return [
        'name' => 'John Doe',
        'email' => 'john@gmail.com'
    ];
});