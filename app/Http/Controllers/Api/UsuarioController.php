<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
public function cadastrar(Request $req)
{

    $dados = $req->all();
    $dados['password'] = Hash::make($dados['password']);
//guardou a senha no banco ja criptografado, com esse hash

return response()->json(Usuario::create($dados),201);


}







}
