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
Auth::routes(['register' => false]);

Route::get('/', 'BlogController@getPosts')->name('blog.index');
Route::get('more', 'BlogController@more')->name('blog.more');
Route::get('tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
Route::get('topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');
Route::middleware('Canvas\Http\Middleware\ViewThrottle')->get('{slug}', 'BlogController@findPostBySlug')->name('blog.post');
