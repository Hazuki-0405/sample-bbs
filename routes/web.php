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


Route::get('comments/{id}', 'CommentsController@show');
Route::post('comments', 'CommentsController@store');
Route::put('comments/{id}', 'CommentsController@update');
Route::delete('comments/{id}', 'CommentsController@destroy');

Route::get('comments', 'CommentsController@index'); //...一覧ページ
// Route::get('comments/create', 'CommentsController@create'); //...新規作成ページ⇒作らん、というか一覧と同じページに置きたい
// Route::get('comments/{id}/edit', 'CommentsController@edit'); //...更新ページ⇒作らん
