<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\perfilEmpresa;
use App\Http\Controllers\subirController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\ProjectImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', [perfilEmpresa::class, 'ranking']);
//Empresas estaticas 
Route::get('/canaco', function () {
    return view('empresas.canaco');
});
Route::get('/ansautos', function () {
    return view('empresas.ans');
});
Route::get('/intactics', function () {
    return view('empresas.intactics');
});
Route::get('/mirsa', function () {
    return view('empresas.mirsa');
});

Route::get('/marques', function () {
    return view('empresas.marques');
});

Route::get('/pasteleria', function () {
    return view('empresas.pasteleria');
});
// //buscador
Route::get('/search/{search?}',[SearchController::class,'search'])->name('productSearch');

Route::get('/promociones', [perfilEmpresa::class, 'promociones']);
Route::get('/cupones', [perfilEmpresa::class, 'cupones']);
Route::get('/empresas-participantes', [perfilEmpresa::class, 'getEmpresas']);
Route::get('/contacto', function () {
    return view('paginas.servicio');
});
Route::get('/conocenos', function () {
    return view('paginas.conocenos');
});

Route::get('empresa', [perfilEmpresa::class, 'index'])->name('empresa');

//Subir Productos-Servicios-Promociones-Cupones
Route::get('/subirProducto', function () {
    if (Auth::check()) {
        if (Auth::user()->rol_id == 2) {
            return view('archivos.opciones');
        }
    }
    return redirect('login');
});

Route::get('/miniatura/{filename}', [subirController::class, 'getImage'])->name('imagenes');
Route::get('/miniaturaphoto/{filename}', [subirController::class, 'getPhoto'])->name('photo');

//Productos
Route::get('/subirProducto/Producto', [subirController::class, 'crearProducto'])->name('crearProducto')->middleware('auth');
Route::get('/subirProducto/Servicio', [subirController::class, 'crearServicio'])->name('crearServicio')->middleware('auth');
Route::get('/subirProducto/Promocion', [subirController::class, 'crearPromocion'])->name('crearPromocion')->middleware('auth');
Route::get('/subirProducto/Cupon', [subirController::class, 'crearCupon'])->name('crearCupon')->middleware('auth');

Route::post('/guardar-Producto', [subirController::class, 'saveProducto'])->name('saveProducto')->middleware('auth');
Route::get('/hjasdRF721f8Fm{producto_id}', [subirController::class, 'getProductoDetail'])->name('detailProducto');
Route::get('/delete-producto/{img_id}', [subirController::class, 'deleteProducto'])->name('productoDelete')->middleware('auth');
Route::get('/edit-product/{producto_id}', [subirController::class, 'editProduct'])->name('productoEdit')->middleware('auth');
Route::post('/update-product/{producto_id}', [subirController::class, 'updateProduct'])->name('productUpdate')->middleware('auth');

//perfil empresa
Route::get('/perfil/{user_id}',[subirController::class, 'getUserDetail'])->name('getUserDetail');

//Comentarios
Route::post('/comment',[commentController::class, 'store'])->name('comment')->middleware('auth');
Route::get('/delete-comment/{comment_id}',[commentController::class, 'delete'])->name('commentDelete')->middleware('auth');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);
 
    if (!File::exists($path)) {
        abort(404);
    }
 
    $file = File::get($path);
    $type = File::mimeType($path);
 
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
 
    return $response;
});