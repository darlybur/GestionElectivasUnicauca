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

Route::get('/cargarElectivas', function () {
    return view('pagesElectivas/cargarElectivas');
});

Route::get('/', 'indexController@index');

Route::get('/registrarElectiva', function () {
    return view('pagesElectivas/registrarElectivas');
});

Route::get('/listarElectivas','electivaController@listarElectivas');

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});



Route::get('/electiva/vistaRegistrarElectiva', 'electivaController@registrarElectivaVista');

Route::post('/electiva/registrar', 'electivaController@registrarElectiva');

Route::delete('/electiva/eliminar/{codigo}', 'electivaController@eliminarElectiva');

Route::get('/electiva/vistaActualizarElectiva/{codigo}', 'electivaController@actualizarElectivaVista');

Route::post('/electiva/actualizar/{codigo}', 'electivaController@actualizarElectiva');

/** Rutas para importar y exportar archivos excel */
Route::get('export', 'CargarDatosController@export')->name('export');
Route::get('importExportView', 'CargarDatosController@importExportView');
Route::post('/cargarElectivas', 'CargarDatosController@import')->name('import');