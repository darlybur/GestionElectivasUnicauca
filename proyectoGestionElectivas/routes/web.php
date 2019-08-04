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
    if(Auth::guest()){
        return view('pagesElectivas/login2');
    }else {
        return view('home');
    }
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

Route::get('/gestionHorarios', function () {
    return view('pagesElectivas/seleccionHorario');
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

Route::post('/electiva/actualizar/{codigo}', 'electivaControllerkj@actualizarElectiva');



Route::post('/horario/registrarHorarioDocente/', 'HorarioController@registrarHorarioSalon');

Route::post('/horario/registrarHorarioEstudiante', 'HorarioController@registrarHorarioEstudiante');

Route::post('/horario/irVistaRegistrarHorarioEstudiante/', 'HorarioController@mostrarVistaHorarioEstudiante');


/** Rutas para mostrar la vista para establecer los horarios del docente y estudiante */

Route::get('/electiva/vistaRegistrarHorarioDocente', 'HorarioController@mostrarVistaHorarioDocente');

Route::get('/electiva/vistaRegistrarHorarioEstudiante', 'HorarioController@mostrarVistaElectivasASeleccionarEstudiante');

/** Rutas para importar y exportar archivos excel */
Route::get('export', 'CargarDatosController@export')->name('export');
Route::get('importExportView', 'CargarDatosController@importExportView');
Route::post('/cargarElectivas', 'CargarDatosController@import')->name('import');


//Route::get('login2', 'AuthController@showLogin'); // Mostrar login
//Route::post('/iniciarSesion', 'AuthController@postLogin'); // Verificar datos
//Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

/*Rutas privadas solo para usuarios autenticados*/
/*Route::group(['before' => 'auth'], function()
{
    Route::get('/', 'indexController@index'); // Vista de inicio
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
