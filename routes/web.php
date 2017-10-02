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
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/struktur', function(){
    return view('struktur');})->name('struktur');

Route::get('/beasiswa', function(){
    return view('beasiswa');})->name('beasiswa');

Route::get('/loker', function(){
    return view('loker');})->name('loker');

Route::get('/mi', function(){
    return view('mi');})->name('mi');

Route::get('/pti', function(){
    return view('pti');})->name('pti');

Route::get('/ti', function(){
    return view('ti');})->name('ti');

Route::get('/si', function(){
    return view('si');})->name('si');