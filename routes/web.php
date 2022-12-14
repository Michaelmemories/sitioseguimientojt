<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

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

//Route::get('/user/{id}', [UserController::class, 'show']);
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [PagesController::class, 'fnLista'])->name('dashboard');
/////////////////Tabla estudiante/////////////////////
Route::get('/', [PagesController::class, 'fnIndex'])->name('xIndex');

Route::post('/', [PagesController::class, 'fnRegistrar'])->name('Estudiante.xRegistrar');

Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])->name('Estudiante.xUpdate');

Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');

Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar'])->name('Estudiante.xEliminar');

Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');

Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria'])->where('numero', '[0-9]+')->name('xGaleria');

Route::get('/lista', [PagesController::class, 'fnLista'])->name('xLista');


////////////Tabla Seguimiento/////////////////////

//Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');



//Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria'])->where('numero', '[0-9]+')->name('xGaleria');

Route::get('/seguimiento', [PagesController::class, 'fnSeguimiento'])->name('xSeguimiento');

Route::get('/detalleSeg/{id}', [PagesController::class, 'fnSegDetalle'])->name('Seguimiento.xDetalleSeg');

Route::post('registrar/', [PagesController::class, 'fnSegRegistrar'])->name('Seguimiento.xRegistrarSeg');

Route::get('/actualizarSeg/{id}', [PagesController::class, 'fnSegActualizar'])->name('Seguimiento.xActualizarSeg');

Route::put('/actualizarSeg/{id}', [PagesController::class, 'fnSegUpdate'])->name('Seguimiento.xUpdateSeg');

Route::delete('/eliminarSeg/{id}', [PagesController::class, 'fnSegEliminar'])->name('Seguimiento.xEliminarSeg');


/*
Route::get('/lista', function () {
    
})->name('xLista');
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
