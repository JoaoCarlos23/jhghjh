<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    
    public function gerarToken(Request $request)
    {
        $this->validate($request,['email'=>'required|email', 'password'=>'required']);

        $usuario = Usuario::where('email',$request->email)->first();

        if(is_null($usuario) || !Hash::check($request->password, $usuario->password)){
            return response()->json('Usuario ou senha invalidos',401);

        }

        $token = JWT::encode(
            ['email' => $request->email],
            env('JWT_KEY')

        );

        return ['acess_token' => $token];



    }




}