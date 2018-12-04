<?php

Route::get('/', 'HomeController@view')->name('login');

Auth::routes();

Route::get('/home', 'UsuariosController@index')->name('list');
Route::get('/register', 'UsuariosController@register')->name('register');
Route::get('/admin/usuarios','UsuariosController@index'); //listado usuarios
Route::get('/admin/usuarios/create','UsuariosController@create'); //Crear usuario
Route::post('/admin/usuarios','UsuariosController@store'); //Crear usuario
