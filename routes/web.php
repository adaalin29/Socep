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

Route::get('/', 'IndexController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/container', 'ContainerController@index');
Route::get('/general', 'GeneralController@index');
Route::get('/servicii', 'ServiciiController@index');
Route::get('/regulamente', 'RegulamenteController@index');
Route::get('/raportari', 'RaportariController@index');
Route::get('/career', 'CareerController@index');
Route::get('/certificari', 'CertificariController@index');
Route::get('/job/{slug}', 'CareerController@detaliuJob');

Route::get('/comunicate-dividende', 'ComunicateDividendeController@index');
Route::get('/politica', 'PoliticaController@index');
Route::get('/calendar', 'CalendarController@index');
Route::get('/comunicate', 'ComunicateController@index');
Route::get('/legal', 'LegalController@index');
Route::get('/intalniri', 'IntalniriController@index');
Route::get('/calendar-financiar', 'CalendarFinanciarController@index');
Route::get('/rapoarte', 'RapoarteController@index');
Route::get('/news', 'NewsController@index');
Route::get('/about', 'AboutController@index');
Route::get('/intalniri', 'IntalniriController@index');
Route::get('/adunari', 'AdunariController@index');
Route::get('/termeni', 'TermeniController@index');
Route::get('/act-sem/{link_static}', 'IndexController@meniu_static');
Route::post('/submitForm', 'CareerController@submit_file');
Route::get('/cookies', 'CookiesController@index');
Route::get('/consiliu', 'ConsiliuController@index');
Route::get('/directorat', 'DirectoratController@index');
Route::get('/tranzactii', 'TranzactiiController@index');

Route::get('locale/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
  });

Route::get('/sdsdsdsa', function () {
    return view('welcome');
});

Route::get('/storage/thumb/{query}/{file?}', 'ThumbController@index')
    ->where([
        'query' => '[A-Za-z0-9\:\;\-]+',
        'file'  => '[A-Za-z0-9\/\.\-\_]+',
    ])
    ->name('thumb');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/media/files', 'Admin\VoyagerMediaController@files')->name('voyager.media.files')->middleware('web', 'admin.user');
    Route::get('/translations', function () {
        return view('admin.translations');
    });
});

