<?php

// Frontend Web
Route::get('/', 'FrontendController@index')->name('welcome');
Route::get('/harga', 'FrontendController@index_harga')->name('harga');
Route::get('/promo', 'FrontendController@index_promo')->name('promo');
Route::get('/gallery', 'FrontendController@index_gallery')->name('gallery');
Route::get('/testimoni', 'FrontendController@index_testimoni')->name('testimoni');
Route::get('/berita', 'FrontendController@index_berita')->name('berita');
Route::get('/contact', 'FrontendController@index_contact')->name('contact');
Route::get('/simulasi-kredit', 'FrontendController@index_kredit')->name('kredit');
Route::post('/contact/save', 'FrontendController@post_contact')->name('post-contact');
