<?php

namespace App\Http\Controllers;

use App\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index(Request $req)
    {

        $produtos = Produto::all(); //select da tabela curso do banco de dados(ELOQUENT)
        $mensagem = $req->session()->get('mensagem'); //pega a mensagem
        return view('produto.index', compact('produtos','mensagem')); //select como objeto disponivel na view


    }


    //adicionar seria o create na documentação laravel, por padrao:

    public function adicionar()
    {
        //caminho a partir do view(pasta padrao)
        return view('produto.adicionar');

    }


    //é a action do formulario o salvar, ele e do tipo http request, tudo o que for enviado vc vai ter:
    public function salvar(Request $req)
    {
        $dados = $req->all(); //vai receber tudo, é um metodo pronto da classe http request importada la em cima

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }

        //abaixo verifica se tem imagem e pega o endereço pra exibir, tem uma funcao pronta la embaixo
        if ($req->hasFile('imagem')) {
            $dados['imagem'] = $this->tratarImagem($req, $dados);
        }


        Produto::create($dados); //isso salva no banco, porem tem que importar a model Curso la em cima, use Curso, SO ISSO!
        
        $req->session()->flash('mensagem','Produto adicionado com sucesso!');

        return redirect()->Route('admin.produtos');
           

    }


    public function editar($id)
    {

        $produto = Produto::find($id);

        return view('produto.editar',compact('produto'));
        //levou o produto la pra view
    }


    public function atualizar(Request $req, $id)
    {

        $produto = $req->all(); //vai receber tudo, é um metodo pronto da classe http request importada la em cima
        
        if(isset($produto['publicado'])){ //ta vendo se ta ativado ele deixa selecionado sim, senao ele deixa como desabilitado
            $produto['publicado'] = 'sim';
        }else{
    
            $produto['publicado'] = 'nao';
        }
        
        if ($req->hasFile('imagem')) {
            $produto['imagem'] = $this->tratarImagem($req, $produto);
        }
        
        
        
        Produto::find($id)->update($produto); //obteve o id e faz a atualização na tabela model Curso

        $req->session()->flash('mensagem','Produto atualizado com sucesso!');

        return redirect()->Route('admin.produtos'); //retornar pro index, apelido pra rota
      
    }


    public function tratarImagem(Request $req,$curso)
    {

        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = 'img/produtos/';
        $ext = $imagem->guessClientExtension();
        $nomeImagem = 'imagem_' . $num . '.' . $ext;
        $imagem->move($dir, $nomeImagem);

        return $dir . $nomeImagem;

    }













}
