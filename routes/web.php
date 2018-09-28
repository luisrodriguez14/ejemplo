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
    return view('welcome');
});


Route::get('/inicio', function () {
    return view('bienvenida');
});



/*Route::get('/materia/listado', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::post('/materia/store', 'MateriaController@store');

Route::get('/materia/show{id}', 'MateriaController@show');
Route::get('/materia/edit{id}', 'MateriaController@edit');
Route::post('/materia/update{id}', 'MateriaController@update');*/

Route::resource('materia', 'MateriaController');
Route::resource('alumno', 'AlumnoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/materia', 'MateriaController@index');//
Route::get('/empleados', 'EmpleadoController@index');
Route::get('/alumnos', 'AlumnoController@index');
Route::get('/dependencias', 'DependenciaController@index');
Route::get('/usuarios', 'UsuarioController@index');

