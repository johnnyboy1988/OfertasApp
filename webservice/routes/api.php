<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('ofertas', function () {
    header("Access-Control-Allow-Origin: *"); //liberar acesso de todas origens
    $ofertas = App\Oferta::all();
    foreach($ofertas as $oferta){
        $oferta->imagem = asset($oferta->imagem);
    }
    return response()->json($ofertas);
});
