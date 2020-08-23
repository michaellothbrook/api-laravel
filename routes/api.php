<?php

use App\Http\Resources\Simulador;
use App\models\Taxa;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::namespace('API')->name('api.')->group(function () {
    Route::get('/instituicoes', 'InstituicaoController@index');
    Route::get('/convenios', 'ConvenioController@index');
    Route::get('/taxas', 'TaxasController@index');

    Route::post('/simulador', 'SimuladorController@store');
    
});
