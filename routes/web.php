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

Route::get('/testp','ControllertestPost@index');
Route::resource('posts','PostsController');










/*Route::get('/posts', function () {
    return view('pages.posts');
});
Route::get('/test',function() {
    return "<h1> Hello Laravel </h1>";
});
Route::get('/var/{id}',function($id) {
    return "this test var URl, $id";
});*/