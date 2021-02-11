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
    return view('home');
});

Route::get('/prodotti', function () {
    $data = [
        [
            'tipo' => 'corte',
            'src' => 'img/corte/38-mezze-maniche.jpg',
            'titolo' => 'N.38 Mezze maniche',
        ],
        [
            'tipo' => 'corte',
            'src' => 'img/corte/44-sedani.jpg',
            'titolo' => 'N.44 Sedani',
        ],
        [
            'tipo' => 'corte',
            'src' => 'img/corte/49-sedanini.jpg',
            'titolo' => 'N.49 Sedanini',
        ],
        [
            'tipo' => 'corte',
            'src' => 'img/corte/53-lumachine.jpg',
            'titolo' => 'N.53 Lumachine',
        ],
        [
            'tipo' => 'corte',
            'src' => 'img/corte/55-chifferi-rigati.jpg',
            'titolo' => 'N.55 Chifferi rigati',
        ],
        [
            'tipo' => 'corte',
            'src' => 'img/corte/58-misto-corto.jpg',
            'titolo' => 'N.58 Misto corto',
        ],
    ];
    return view('prodotti', compact('data'));
});

Route::get('/contatti', function () {
    return "Contatti";
});
