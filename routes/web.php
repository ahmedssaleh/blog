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




Route::get('/task/{id}', function ($id) {
    $tasks = [
        '1'=>'task 1',
        '2'=>'task 2',
        '3' =>'task 3',
        '4 '=>'task 4'
    ];
    $task=$tasks[$id];
    return view ('task',compact('task'));
});









Route::get('about',function () {
//    return view('about');
$tasks = [
    '1'=>'task 1',
    '2'=>'task 2',
    '3' =>'task 3',
    '4'=>'task 4'];
   return view ('about',compact('tasks'));
});
