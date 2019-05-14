<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','PagesController@index');
Route::get('/categories','PagesController@categories');
Route::get('/about','PagesController@aboutUs');
Route::get('/how-it-works','PagesController@howItWorks');
Route::get('/register','PagesController@signUp');
Route::get('/admin-panel','PagesController@adminPanel');
Route::get('/categories/mobiles','PagesController@mobiles');
Route::get('/categories/movies','PagesController@movies');
Route::get('/categories/books','PagesController@books');
Route::get('/categories/restaurants','PagesController@restaurants');
Route::get('/categories/series','PagesController@series');
Route::get('/categories/places','PagesController@places');
Route::get('/categories/music','PagesController@music');
Route::get('/categories/drinks','PagesController@drinks');
Route::get('/categories/apps','PagesController@apps');
Route::get('/categories/cafes','PagesController@cafés');
Route::post('/music','PagesController@storemusic');
Route::post('/movies','PagesController@storemovies');
Route::post('/series','PagesController@storeseries');
Route::post('/books','PagesController@storebooks');
Route::post('/places','PagesController@storeplaces');
Route::post('/mobiles','PagesController@storemobiles');
Route::post('/apps','PagesController@storeapps');
Route::post('/cafes','PagesController@storecafes');
Route::post('/restaurants','PagesController@storerestaurants');
Route::post('/drinks','PagesController@storedrinks');
Route::post('/movies{position}','PagesController@editmovies');
Route::put('/update','PagesController@updatemovies');
Route::get('/mobiles/{id}/edit','PagesController@editmobiles');
Route::put('/mobiles/update/{id}','PagesController@updatemobiles');
Route::put('/movies/update/{id}','PagesController@updatemovies');

Route::get('/Ajax',function(){
    if(Request::ajax()){
        return view('Ajax');
    }
});

Auth::routes(Route::get('/admin-panel','PagesController@adminPanel')->middleware('auth'));
Route::get('/my-lists','PagesController@myLists')->middleware('auth');


