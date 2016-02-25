<?php

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web']], function () {
    Route::auth();

Route::get('/developer', 'DeveloperController@view');
Route::post('/developer', 'DeveloperController@index');
Route::get('/developer/view','DeveloperController@view2');
Route::get('/developer/viewdev','DeveloperController@viewdev');
Route::get('/developer/viewdev/{name}','DeveloperController@viewd1');
Route::post('/developer/viewdev/editor','DeveloperController@viewd');
Route::post('/developer/update', 'DeveloperController@update');
Route::get('/image/{name}','DeveloperController@viewimage');
Route::get('/post', 'postController@view');
Route::post('/post', 'postController@index');
Route::get('/home', 'HomeController@index');
});
