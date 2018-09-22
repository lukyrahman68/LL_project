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

use App\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tes', function () {
    return view('tes');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/lfoe', function () {
    return view('lfoe');
});

Route::get('/lfoe_detail', function () {
    return view('lfoe_detail');
});


Route::get('/wws', function () {
    return view('wws');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/show','cobaController@show');


Route::get('/about', function () {

    return view('about');
})->name('about.home');

Route::get('/tambah',function () {
    try{
        $user = new User;
        $user -> name = 'Luky Rahman';
        $user -> email = 'lukyrahman68@gmail.com';
        $user -> password = '123';
        $user->save();
        return redirect()->route('about.home', ['msg' => 'berhasil']);
    }catch(\Exception $e){
        // do task when error
        $msg = $e->getMessage();   // insert query
        return redirect()->route('about.home', ['msg' => $msg]);
     }

Route::resource('contact', 'cobaController');



});
