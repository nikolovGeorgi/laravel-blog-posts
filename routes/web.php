<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/api/post/{id?}', 'PostController@index');
Route::post('/api/post', 'PostController@store');
Route::post('/api/post/{id}', 'PostController@update');
Route::delete('/api/post/{id}', 'PostController@destroy');