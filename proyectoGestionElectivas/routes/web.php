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
Auth::routes();


/** Rutas para importar y exportar usuarios excel */
Route::get('exportU', 'CargarDatosUsuario@exportU')->name('exportU');
Route::get('importExportViewU', 'CargarDatosUsuario@importExportViewU');
Route::post('/cargarUsuarios', 'CargarDatosUsuario@importU')->name('importU');
Auth::routes();


/** Rutas para importar datos de los salones */
Route::get('importExportViewSalones', 'CargarSalonesController@importExportViewSalones');
Route::post('/cargarSalones', 'CargarSalonesController@importSalones')->name('importSalones');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Rutas Login
//Route::get('/home', 'HomeController@index')->name('home');

/* Auth::routes(['register' =>true]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> 50cdede30d199f655ce85a2c0dc1dbe1fa81c213 */
