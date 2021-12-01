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

Route::get('/','HomeController@index')
    ->name('home');

Route::get('/tentang','TentangController@index')
    ->name('tentang');

Route::get('/detail/{berita_package}','DetailController@index')
    ->name('detail');

Route::get('/detailquotes/{quotes_package}','DetailQuotesController@index')
    ->name('detailquotes');

// Route::get('/about','DetailAboutController@index')
//     ->name('about');

Route::get('/list','ListController@index')
    ->name('list');

Route::get('/listquotes','ListquotesController@index')
    ->name('listquotes');

Route::get('/search/action', 'SearchController@action')->name('search.action');
Route::get('/search','SearchController@index')
    ->name('search');


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard');
        Route::get('/Empat','EmpatController@index')
            ->name('Empat');


        Route::resource('berita-packages','BeritaPackagesController');
        Route::resource('quotes-packages','QuotesPackagesController');
        Route::resource('tentang-packages','TentangkamiPackagesController');
        Route::resource('about','AboutController');

    });


// Auth::routes(['verify'=> true]);

Auth::routes(['verify' => true, 'register' => false]);