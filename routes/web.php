<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1', function () {
    return 'welcome';
});

Route ::namespace('front')->group(function(){
    Route::get('users','userController@showadminname');
});

// Route :: prefix('users')->group(function(){
//     Route::get('/show','userController@showadminname');

// });
// Route ::group(['prefix'=>'users'],function(){
//     Route:: get('/kl',function()
//     {
// return 'mm';
//     });
// });

Route::resource('news','NewsControlllers');

Route ::get('view','NewsControlllers@getindex');

Route::get('landing',function(){
    return view('landing');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route :: get('/dashboard',function(){
    return "Dashboard";
});
