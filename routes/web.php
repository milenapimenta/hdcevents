<?php

use Illuminate\Support\Facades\Route;

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
    $nome = "Milena";
    $arr = [10, 20, 30, 40, 50, 60];
    $nomes = ["Milena", "Apollo", "Lucy", "Cristiano"];

    return view
        ('welcome',
            [
                'nome' => $nome,
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
});

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id?}', function ($id = 1) {
    return view('product', ['id' => $id]);
});
