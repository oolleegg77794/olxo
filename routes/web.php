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

Route::post('/price', 'AddgoodController@price')-> name('price');

Route::get('/', 'AddgoodController@content')-> name('home');

Route::get('/group_{by?}', 'AddgoodController@content');

Route::get('/categori{idd?}', 'AddgoodController@content');

Route::get('/group{by?}categori{idd?}', 'AddgoodController@content');





Route::get('/add', function () {
    return view('template.add_good');
});

Route::get('/add_categori-{id}','AddgoodController@categori')->name('goods-categori');

Route::post('/add_categori-submit','AddgoodController@submit')->name('contact-form'); 

Route::get('/info_good-{id}', 'AddgoodController@info')->name('goods-info');

Route::get('/account', function () {
    return view('account');
});

Route::get('/regestration', 'Reg_AuthController@regestration')->name('regestration');

Route::post('/auth_submit', 'Reg_AuthController@authsubmit')->name('auth_submit');

Route::get('/account', 'AddgoodController@account')->name('account');

Route::get('/account_goods_del{id}', 'AddgoodController@account_delgood')->name('account');

Route::get('/exit', 'Reg_AuthController@exit')->name('exit');