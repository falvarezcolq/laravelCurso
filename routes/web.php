<?php



 		
Route::get('/','InitController@index');
Route::get('home' ,'HomeController');

Route::resource('profession', 'ProfessionController');
Route::resource('product' ,'ProductController');
Route::resource('user','UserController');
Route::get('listar' , 'ProfessionController@listar');

Route::resource('login','LoginController'); 
Route::get('logout','LoginController@logout');