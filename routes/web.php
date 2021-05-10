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
    /* array dati pasta */
    $data = config('pasta');
    /* inizializzo 3 array vuoti in cui suddividere i tipi di pasta */
    $lunga = [];
    $corta = [];
    $cortissima = [];
    /* divido i tipi di pasta nei 3 array */
    foreach($data as $key => $pasta){
        $pasta['id'] = $key;
        if($pasta['tipo'] == 'lunga'){
            $lunga[] = $pasta;
        }
        else if ($pasta['tipo'] == 'corta'){
            $corta[] = $pasta;
        }
        else if ($pasta['tipo'] == 'cortissima'){
            $cortissima[] = $pasta;
        }
    }    
    return view('home',[
        'lunga' => $lunga,
        'corta' => $corta,
        'cortissima' => $cortissima,
    ]);
})->name('homepage');

Route::get('prodotti/{$id}', function($id) {
    $data = config('pasta');

    if($id >= count($data)){
        abort(404);
    }

    $pasta = $data[$id];
     
    return view('prodotti', [
        'pasta' => $pasta
    ]);
})->where('id', '[0-9]+')->name('prodotti');

Route::get('/news', function() {
    return view('news');
})->name('news');
