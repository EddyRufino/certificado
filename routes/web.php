<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('certificado', 'CertificadoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
