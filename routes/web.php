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

    $user = new \App\User();
    $user->name = 'email';
    $user->email = 'hoseinshoghi@gmail.com';
    $user->password = 'J22';
    $user->save();
    return view('welcome');
});

