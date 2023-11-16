<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\RegistroPersonaWebController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PdfController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nueva-ruta', function () {
    return view('vistaDos');
});

//------------------------------------------------------------------------------
//Listar Persona
Route::get('/lista-personas',
 [PersonaController::class, 'listarPersona']
)->name('lista-personas');

Route::delete('/eliminar-persona/{id_persona}',
 [PersonaController::class, 'eliminarPersona']
)->name('eliminar.persona');

Route::get('/mostrar-persona/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar.persona');

Route::get('/editar-persona/{id_persona}',
[PersonaController::class, 'editarPersona']
)->name('editar.persona');

Route::put('/actualizar-persona/{id_persona}',
[PersonaController::class, 'actualizarPersona']
)->name('actualizar.persona');

//------------------------------------------------------------------------------


//------------------------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina.web'); //funciona

Route::get('/pagina-web/registro-persona',
[RegistroPersonaWebController::class, 'registroPersona']
)->name('registro.persona');

Route::post('/pagina-web/guardar-persona',
[RegistroPersonaWebController::class, 'guardarPersona']
)->name('guardar.persona');

//------------------------------------------------------------------------------


//------------------------------------------------------------------------------
//Exportar pdf
Route::get('/pdf-personas',
[PdfController::class, 'exportarPdfPersonas']
)->name('pdf.personas');

//------------------------------------------------------------------------------
