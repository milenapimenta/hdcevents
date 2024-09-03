<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('events', [EventController::class, 'store']);

Route::get('/contatos', function () {
    return view('contact');
});

// Route::get('/produtos', function () {

//     $busca = request('search');

//     return view('products', ['busca' => $busca]);
// });

// Route::get('/produtos/{id?}', function ($id = 1) {
//     return view('product', ['id' => $id]);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
