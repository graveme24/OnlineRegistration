<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function()
    {
        return view('guest.frontpage');
    });
    Route::get('/instruction', function()
    {
        return view('guest.instruction');
    });    
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send-mail', function () {

    $details = [
        'title'=>'Mail From Haven of Wisdom',
        'body'=>'This is your link for Login: '
    ];

    \Mail::to('havenowisdom@gmail.com')->send(new \App\Mail\TestMail($details));
    
    dd("Email Sent");
});
Route::get('admin/home', 'HomeController@admindex')->name('admin.home')->middleware('type');
Route::get('admin/profile', 'HomeController@adminprof')->name('admin.profile')->middleware('type');

Route::get('/insert','PrimaryInfo@index')->name('insertp');
Route::post('create','PrimaryInfo@create')->name('createp');

Route::get('image','ImageController@create')->name('image.create');
Route::post('image','ImageController@store')->name('image.store');
