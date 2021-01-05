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


Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'], function(){
Route::get('/', 'TaskController@index'); //afisare lista sarcini pe pagina de start
Route::resource('tasks', 'TaskController');// Ruta de resurse va genera CRUD URI, un controller de tip resource ce va crea un fisier cu functii definite pt create, delete, update
});

?>

