<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function () {
    return 'Available Jobs';
})->name('jobs');

Route::get('/posts/{id}', function(string $id){
    return 'Post '. $id;
    //'[0-9]+', '[a-zA-Z]+'
    //whereAlpha
});//->whereNumber('id');

Route::get('/users/{id}', function(string $id){
    return 'User '. $id;

});

Route::get('/posts/{id}/comments/{commentid}', function(string $id, string $commentid){
    return 'Post '. $id.'Comment '. $commentid ;
});