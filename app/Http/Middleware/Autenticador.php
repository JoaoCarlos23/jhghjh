<?php

namespace App\Http\Middleware;


use Closure;

class Autenticador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        try{

        if(!$request->hasHeader('Authorization'))
        {
            throw new \Exception();
            
        }

        $authorizationHeader = $request->header('Authorization');
        $token = str_replace('Bearer ','',$authorizationHeader);
        $dadosAutentiacao = JWT::decode($token,env('JWT_KEY'),['HS256']);
        //modificar o arquivo .env colocando um JWT (JWT_KEY)do que vai ser a chave


        $usuario = Usuario::where('email',$dadosAutentiacao->email)->first();

        if(is_null($usuario)){
            throw new \Exception();
            
        }

        return $next($request); //isso e padrao dos autenticadores, nao mecher
  
  
  
  
    }catch(\Exception $e){

        return response()->json('Nao autorizado',401);
    }
  
  
  
    }











}
