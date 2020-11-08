<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::group(['mid'])
//ver isso e o kernel que falta, e os imports de autenticador
//ir tambem no.env e colocar o jwt key na ultima linha



//criar outra contrller pra api
Route::get('/listar', 'Api\CursoController@listar');


//salvar:

Route::post('/salvar','Api\CursoController@salvar');


//buscar:
Route::get('/buscar{id}','Api\CursoController@buscar');


//atualizar:
Route::put('/atualizar{id}','Api\CursoController@atualizar');


//deletar
Route::delete('/deletar{id}','Api\CursoController@deletar');


Route::post('/cadastrar','Api\UsuarioController@cadastrar');

Route::post('/login','TokenCOntroller@gerarToken');






