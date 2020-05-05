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
Route::get('test', 'TestController@lookup');
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap/sitemap{page}.txt', 'SitemapController@txt')->where('page', '[0-9]+');
Route::get('/sitemap{page}.txt', 'SitemapController@txt')->where('page', '[0-9]+');
Route::get('/sitemap/sitemap{page}.xml', 'SitemapController@xml')->where('page', '[0-9]+');
Route::get('/sitemap{page}.xml', 'SitemapController@xml')->where('page', '[0-9]+');

Route::get('/{range}', 'IpController@short')->where('range', '^((25[0-5]|(2[0-4]|1[0-9]|[1-9]|)[0-9])(\.(?!$)|$)){3}$');
Route::get('/{ip}', 'IpController@show')->where('ip', '^((25[0-5]|(2[0-4]|1[0-9]|[1-9]|)[0-9])(\.(?!$)|$)){4}$');

Route::get('/', function () {
    return view('welcome');
});
