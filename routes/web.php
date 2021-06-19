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
//contact
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact/envoyer', 'ContactController@envoyer')->name('contact.envoyer');

Route::get('reglement', 'ReglementController@index')->name('reglement.index');
Route::get('reglement/search', 'ReglementController@search')->name('reglement.search');
// journal start
Route::get('actualite', 'JournalController@index')->name('journal.index');
Route::get('actualite/{id}', 'JournalController@detail')->name('journal.detail');
Route::post('journal/commentaire', 'JournalController@comment')->name('journal.comment');
Route::get('journal/search', 'JournalController@search')->name('journal.search');

// journal close
Route::get('/', 'OtherController@home')->name('index');
Route::get('gallery', 'OtherController@gallery')->name('gallery');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//forum
Route::get('/topics', 'TopicController@index')->name('topics.index');
Route::resource('/topics', 'TopicController')->except(['index']);


//comment forum
Route::get('showFromNotification/{topic}/{notification}', 'TopicController@showFromNotification')->name('topics.showFromNotification');
Route::post('/comments/{topic}', 'CommentController@store')->name('comments.store');
Route::post('/commentReply/{comment}', 'CommentController@storeCommentReply')->name('comments.storeReply');
Route::post('/markedAsSolution/{topic}/{comment}', 'CommentController@markedAsSolution')->name('comments.markedAsSolution');

//resultat
Route::get('resultat', 'ResultatController@index')->name('resultat.index');

//administration 
Route::get('administration', 'OtherController@administration')->name('administration.index');

// apropos (about)
Route::get('apropos', 'OtherController@about')->name('about.index');