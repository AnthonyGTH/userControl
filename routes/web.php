<?php

Route::get('/', 'HomeController@view')->name('login');

Auth::routes();

Route::get('/home', 'UsuariosController@index')->name('home');
Route::get('/admin/usuarios','UsuariosController@index'); //listado usuarios
Route::get('/admin/usuarios/create','UsuariosController@create'); //Crear usuario
Route::post('/admin/usuarios','UsuariosController@store'); //Crear usuario
