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
    // return view('layouts.app');
    return view('pages.home');

});


Route::get('documentView/{id}', 'DocumentsViewController@index' );
Route::get('search/{querystring}', 'DocumentsViewController@search');
// Route::get('search/{querystring}/{author}', 'DocumentsViewController@searchbyauthor');
Route::get('search/{querystring}/{author}', ['uses' => 'DocumentsViewController@searchbyauthor']);


Route::post('/relevant', 'publicacionController@relevant');
Route::post('/recent', 'publicacionController@recent');
Route::post('/getDocument', 'publicacionController@getdoc');
Route::post('/getsearch', 'publicacionController@getsearch');
Route::post('/allAuthors', 'publicacionController@getAllAuthors');
Route::post('/allfromAuthor', 'publicacionController@getAllFromAuthor');






Auth::routes();
Route::resource('/notas', 'NotaController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/document', 'DocumentController')->middleware('auth');




