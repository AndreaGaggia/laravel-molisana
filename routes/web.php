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
})->name('home');

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
        [
            'tipo' => 'lunghe',
            'src' => 'img/lunghe/4-spaghetto-quadrato-bucato.jpg',
            'titolo' => 'N.4 Spaghetto quadrato bucato',
        ],
        [
            'tipo' => 'lunghe',
            'src' => 'img/lunghe/5-fettuccine.jpg',
            'titolo' => 'N.5 Fettuccine',
        ],
        [
            'tipo' => 'lunghe',
            'src' => 'img/lunghe/6-linguine.jpg',
            'titolo' => 'N.6 Linguine',
        ],
        [
            'tipo' => 'lunghe',
            'src' => 'img/lunghe/7-mezze-linguine.jpg',
            'titolo' => 'N.7 Mezze linguine',
        ],
        [
            'tipo' => 'lunghe',
            'src' => 'img/lunghe/11-spaghettino-quadrato.jpg',
            'titolo' => 'N.11 Spaghettino quadrato',
        ],
        [
            'tipo' => 'cortissime',
            'src' => 'img/cortissime/84-ditale-quadrato.jpg',
            'titolo' => 'N.84 Ditale quadrato',
        ],
    ];
    return view('prodotti', compact('data'));
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/prodotti-pro', function () {
    $data = json_decode(config('dati-pasta.paste'), true);
    return view('prodotti-pro', compact('data'));
})->name('prodotti-pro');

Route::get('/prodotti-pro/{key}', function ($key) {
    $data = json_decode(config('dati-pasta.paste'), true);
    $prodotto = $data[$key];
    return view('product', compact('prodotto'));
});