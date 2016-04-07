<?php
Route::group(['middleware' => ['web']], function(){
    Route::get('/', 'IndexController@index');
	Route::resource('contact', 'ContactController');
});

