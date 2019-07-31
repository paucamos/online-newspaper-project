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
Route::get('/noticies/seccio/{section_id}', array('uses' => 'HomeController@sectionList', 'as' => 'sections'));
Route::get('/noticies/regio/{region_id}', array('uses' => 'HomeController@regionList', 'as' => 'regions'));

Route::group(["middleware"=>"auth"],function(){
    Route::get('/dashboard', 'DashboardController@home');
    Route::resource("/articles","ArticlesController");
    Route::get("/articles/delete/{id}",array("uses"=>"ArticlesController@destroy","as"=>"destroyarticle"));
    Route::get("/articles/disable/{id}",array("uses"=>"ArticlesController@disable","as"=>"disablearticle"));
    Route::get("/articles/enable/{id}",array("uses"=>"ArticlesController@enable","as"=>"enablearticle"));
    Route::get("/articles/search", array("uses"=>"ArticlesController@list", "as" => "listArticle"));

    Route::resource("/sections","SectionsController");
    Route::get("/sections/delete/{id}",array("uses"=>"SectionsController@destroy","as"=>"destroysection"));

    Route::resource("/regions","RegionsController");
    Route::get("/regions/delete/{id}",array("uses"=>"RegionsController@destroy","as"=>"destroyregion"));
});

