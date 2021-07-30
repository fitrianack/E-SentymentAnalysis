<?php

use Illuminate\Support\Facades\Route;
use Phpml\Classification\NaiveBayes;
use App\Sentimen;

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

//landing page
Route::get('/', 'UmumController@welcome');
Route::get('/home', 'HomeController@index')->name('home');

//Login dan logout
Auth::routes();
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');

//Kelola Password
Route::get('/admin/ubah-password', 'AdminController@ubah_password')->name('ubah-password');
Route::post('/admin/updatePw/{id}', 'AdminController@updatePw')->name('updatePw');

//Kelola Profil
Route::get('/admin/profil', 'AdminController@profil')->name('profil');
Route::get('/admin/profil/edit/', 'AdminController@edit_profil')->name('edit-profil');
Route::post('/admin/profil/update/{id}', 'AdminController@update_profil')->name('update-profil');

//Analisis Sentimen
Route::get('/admin/analisis-sentimen', 'KlasifikasiController@analisis_sentimen')->name('analisis-sentimen');

//Data Training
Route::get('/admin/data-training', 'DataTrainingController@index')->name('analisis-sentimen');
Route::post('/admin/data-training/store', 'DataTrainingController@store');
Route::get('/admin/data-training/edit/{id}', 'DataTrainingController@edit');
Route::post('/admin/data-training/update/{id}', 'DataTrainingController@update');
Route::get('/admin/data-training/delete/{id}', 'DataTrainingController@delete');
Route::post('/admin/data-training/import', 'DataTrainingController@import')->name('import_datatraining');

//Data Testing
Route::get('/admin/data-testing', 'DataTestingController@index');

//Stopwords
Route::get('/admin/stopwords', 'StopwordsController@stopwords')->name('stopwords');
Route::post('/admin/stopwords/import', 'StopwordsController@import_stopwords')->name('import_stopwords');

//Singkatan
Route::get('/admin/singkatan', 'KataSingkatanController@index');
Route::post('/admin/singkatan/import', 'KataSingkatanController@import');
