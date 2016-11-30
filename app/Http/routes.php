<?php


// Route::get('about', function(){
// 	return view('pages.about'); // resources/views/pages/about.blade.php
// });

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');