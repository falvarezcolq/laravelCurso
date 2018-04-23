<?php



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get( '/prueba' , function(){
//     return "Prueba";
// });

// Route::get( '/numeros/{num}' ,function($num){
//     return "Esto es si y solo si un número {$num}";
// }) -> where( 'num' , '[0-9]+' );

// Route::get( '/cadenas/{cad}' ,function($cad){
//     return "Esto es si y solo si una cadena {$cad}";
// }) -> where( 'cad' , '[A-Za-z]+' );

// Route::get('/inicio' , 'InitController@index');
// Route::get('/inicio/index2' , 'InitController@index2');
// Route::get( '/home' , 'HomeController');
// Route::get( '/usuarios' , 'UserController@lista');
// Route::get( '/usuarios/{id}/{name}' ,'userController@read' );
// Route::resource( '/product' , 'ProductController');

Route::get('/','InitController@index');
Route::get('/home' ,'HomeController');