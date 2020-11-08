<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends BaseController
{
    
//SE PRECISAR CRIAR UM PRA USUARIO, CRIAR OUTRA CONTROLLER PRA PRODUTO E NO CONTRUTOR COLOCAR pra classe Usuario::

public function __construct()
{
    $this->classe = Curso::class;

}




//     //ESSE LISTAR É UMA API QUE VAI GERAR UM JSON
// public function listar()
// {

//     $dados = Curso::all();

//     foreach($dados as $dado)
//     {
//         $dado['imagem'] = url($dado['imagem']); //retorna a url publica pra imagem, com http pra quem tiver de fora acessar, nao vai ser uma pasta img como t no servidor
//         //ta setando a posicao imagem como a url+o dado que ta salvo no banco
//         //nesse foreach, ele ta tratando a parte da imagem antes de consumir
//     }



//     return response()->json($dados, 200); //lista todos os cursos e retorna 200 COMO STATUS(OK) HTTP
// //POSTMAN TEST SUA API CRIADA ANTES DE USAR, SO TESTAR LA BEM LEGAL
// }

// //da pra cirar pasta nahora de salvar a api no postman
// //ele salva pra vc os gets



// public function salvar(Resquest $req)
// {

//     $dados = $req->all();

//     if(isset($dados['publicado']))
//     {
//         $dados['publicado'] = 'sim';
        
//     }
//     else{
//         $dados['publicado'] = 'nao';

//     }

//     return response()->json(Curso:: create($dados), 201);
//     //retornando um 201 pro post(salvar no banco), um novo recurso foi criado
//     //la em cima tem q colocar api/salvar o api cria esse endereco de api/salvar das rotas
//     //pra testar vc tem que passar o json no postman manualmente pra testar, inserir dados pra ver
//     //selecionar o formato json na hora de inserir os dados

// }



// public function buscar($id)
// {
//     $dados = Curso::find($id); //vai buscar no banco o id do produto pra mostrar

//     if(is_null($dados)){

//         return response()->json('',204); //se retornar vazio, retorna um 204 mas nao tem nada retornado
//     }
//     else{
//         return response()->json($dados,200);
//     }


// }



// public function atualizar(Request $req, $id)
// {

//     $dados = $req->all();

//     $item = Curso::find($id); //achar o que vc quer atuzalizar pelo id

//     if(is_null($item))
//     {
//         return response()->json(['erro' => 'Recurso não encontrado'],404);
//         //se nao existir, retorna esse erro improvisado
//     }
//     else
//     {

//         return response()->json($item->update($dados),200);

//         // return $item->update($dados); pode fazer assim tambem
//         //sera nessario colocar o id na barra e tambem o conteudo que vai ser atualizado
//     }



// }


// public function deletar($id)
// {

// $item = Curso::find($id);

//     if(is_null($item)){

//         return response()->json(['erro' => 'recurso nao encontrado'],404);
//     }

//     $item->delete();

//     return response()->json('Item removido', 200);

// }













}
