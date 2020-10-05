<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    

    public function produtoIndex()
    {

        $produtos = [
           (object) ['nome' => 'Mouse', 'preco' => 'R$ 59,90'],
           (object) ['nome' => 'Teclado', 'preco' => 'R$ 299,00'],
           (object) ['nome' => 'HeadPhone', 'preco' => 'R$ 350,99']
        ];

        return view('produto.index',compact('produtos'));

    }





    public function index()
    {


         $contatos = [ //array de arrays
            // cada posicao é um objeto abaixo, vc ta convertendo pra facilitar na hora de mmostrar
          (object)['nome' => 'Maria', 'Telefone' => '33334455'],
           (object)['nome' => 'Pedro', 'Telefone' => '55774459']
        ];

        return view('contato.index', compact('contatos')); //pra retornar a pagina de index, quando carregar ou redirecionar
  
  
    }

    public function criar(Request $req)
    {
        //dd($req['nome']);
        dd($req->all()); //aqui ele vai exibir todas as informações do input
        return 'Produto Criado';
    }

    public function editar()
    {
        
        return 'Editar Produto informado';
    }







}
