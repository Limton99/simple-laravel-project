<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@home');
Route::get('/about', 'MainController@about');
Route::get('/review', 'MainController@review')->name('review');
Route::get('/review/{id}', 'MainController@reviewOne')->name('review-one');
Route::get('/review/update/{id}', 'MainController@reviewUpdate')->name('update');
Route::post('/review/update/{id}', 'MainController@reviewUpdateSubmit')->name('update-submit');
Route::get('/review/delete/{id}', 'MainController@reviewDelete')->name('delete');
Route::post('/review/check', 'MainController@review_check');


// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: '. $id.'. Name: '.$name;
// });
