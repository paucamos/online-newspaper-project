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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/buscar', array('uses' => 'HomeController@search', 'as' => 'buscar'));

Route::get('/noticia/{article_id}', array('uses' => 'HomeController@showArticle', 'as' => 'showArticle'));
Route::get('/quisom', array('uses' => 'HomeController@quisom', 'as' => 'quisom'));
Route::get('/quisom/buscar', function() {
    return redirect('buscar');
});
Route::get('/noticies/seccio/{section_id}/{section_name}', array('uses' => 'HomeController@sectionList', 'as' => 'sections'));
Route::get('/noticies/regio/{region_id}/{region_name}', array('uses' => 'HomeController@regionList', 'as' => 'regions'));

Route::group(["middleware"=>"auth"],function(){
    Route::get('/logout', array('uses'=>'DashboardController@logout', 'as'=>'logout'));
    Route::get('/dashboard', array('uses' => 'DashboardController@home', 'as' => 'showDashboard'));
    Route::get("/articles/delete/{id}",array("uses"=>"ArticlesController@destroy","as"=>"destroyarticle"));
    Route::get("/articles/disable/{id}",array("uses"=>"ArticlesController@disable","as"=>"disablearticle"));
    Route::get("/articles/enable/{id}",array("uses"=>"ArticlesController@enable","as"=>"enablearticle"));
    Route::get("/articles/search", array("uses"=>"ArticlesController@list", "as" => "listArticle"));
    Route::resource("/articles","ArticlesController");

    Route::get('/sections/search', array('uses'=>'SectionsController@list', 'as'=>'listSection'));
    Route::get("/sections/delete/{id}",array("uses"=>"SectionsController@destroy","as"=>"destroysection"));
    Route::resource("/sections","SectionsController");

    Route::get('/regions/search', array('uses'=>'RegionsController@list', 'as'=>'listRegion'));
    Route::get("/regions/delete/{id}",array("uses"=>"RegionsController@destroy","as"=>"destroyregion"));
    Route::resource("/regions","RegionsController");

    Route::get('/journalists/search', array('uses'=>'JournalistsController@list', 'as'=>'listJournalists'));
    Route::resource("/journalists","JournalistsController");


});

