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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/noticia/{article_id}', array('uses' => 'HomeController@showArticle', 'as' => 'showArticle'));
Route::get('/quisom', array('uses' => 'HomeController@quisom', 'as' => 'quisom'));

Route::group(["middleware"=>"auth"],function(){
    Route::get('/dashboard', 'DashboardController@home');
    Route::resource("/articles","ArticlesController");
    Route::get("/articles/delete/{id}",array("uses"=>"ArticlesController@destroy","as"=>"destroyarticle"));
    Route::get("/articles/search", array("uses"=>"ArticlesController@aaaa", "as" => "listArticle"));
});

