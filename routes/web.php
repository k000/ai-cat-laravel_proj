<?php

use Illuminate\Http\Request;

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

//indexページ
Route::get('/', function () {
    return view('welcome');
});

//一覧ページ
Route::get('/posts','PostController@index');


//詳細検索機能
Route::get('/serachpost','PostController@serach');

//都道府県別一覧結果（ほぼ全件表示エリア）
Route::get('/posts/{parame}','PostController@getlists');


//Route::delete('/post/{post}','PostController@destroy');
//新規投稿画面
Route::get('/post/new',function(){
  return view('post.newpost');
});
//投稿時（POST)
Route::post('/post','PostController@store');


//投稿詳細ページ
Route::get('/detail/{id}','PostController@detail');

//コメント投稿時
Route::post('/sotre_comment','CommentController@store');



Route::get('/about',function(){
  return view('about');
});
Route::get('/usebbs',function(){
  return view('usebbs');
});



Route::get('/noraneko',function(){
  return view('section.noraneko');
});
