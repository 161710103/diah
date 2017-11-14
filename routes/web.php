<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about',function() {
return '<center><h1> Hallo!About 1</h1>'
 .'Selamat datang di webapp saya <br>'
 .'laravel,emang keren.</center>';	
});

Route::get('/about/1',function() {
return '<center><h1> Hallo!About 2</h1>'
 .'Selamat datang di webapp saya <br>'
 .'laravel,emang keren.</center>';	
});

Route::get('/about/2',function() {
return '<center><h1> Hallo!About 3</h1>'
 .'Selamat datang di webapp saya <br>'
 .'laravel,emang keren.</center>';
});

Route::get('/about/3',function() {
return '<center><h1> Hallo!About 4</h1>'
 .'Selamat datang di webapp saya <br>'
 .'laravel,emang keren.</center>';	
});

Route::get('/about/4',function() {
return '<center><h1> Hallo!About 5</h1>'
 .'Selamat datang di webapp saya <br>'
 .'laravel,emang keren.</center>';	
});


 Route::get('/kontak', function(){
 return view ('kontak');
 });

 route parameter
 Router::get('/about/{id}', function($a){
 	return 'Ini Halaman About <b>'.$a.'</b>';
 });

 Route::get('/kantin/{bakso}/{susu}/{bolu}', function($b,$c,$d){
     return 'Saya pesan  <b>'.$b.'</b><br>'
      .'Minumannya  <b>' .$c.'</b><br>'
       .'Tambah Cemilan <b>' .$d.'</b><br>';
 });

//route optimal parameter
Route::get('user/{name}' , function ($name= 'diah'){
	return 'Nama Saya ' .$name;
});