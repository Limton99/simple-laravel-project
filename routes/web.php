<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@home');
Route::get('/about', 'MainController@about');
Route::get('/review', 'MainController@review')->name('review');
Route::get('/review/{id}', 'MainController@reviewOne')->name('review-one');
Route::post('/review/check', 'MainController@review_check');


// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: '. $id.'. Name: '.$name;
// });
