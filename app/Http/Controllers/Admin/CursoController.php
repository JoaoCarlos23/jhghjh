<?php

namespace App\Http\Controllers\Admin;

use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index(Request $req)
    {

        $cursos = Curso::all(); //select da tabela curso do banco de dados(ELOQUENT)
      
        $mensagem = $req->session()->get('mensagem'); //pega a mensagem
      
        return view('admin.cursos.index', compact('cursos','mensagem')); //select como objeto disponivel na view

    }


    //adicionar seria o create na documentação laravel, por padrao:

    public function adicionar()
    {
        //caminho a partir do view(pasta padrao)
        return view('admin.cursos.adicionar');

    }


    //é a action do formulario o salvar, ele e do tipo http request, tudo o que for enviado vc vai ter:
    public function salvar(Request $req)
    {

        $curso = $req->all();

        if(isset($curso['publicado'])){
            $curso['publicado'] = 'sim';
        }



        //abaixo verifica se tem imagem e pega o endereço pra exibir, tem uma funcao pronta la embaixo
        if ($req->hasFile('imagem')) {
            $curso['imagem'] = $this->tratarImagem($req, $curso);
        }



        //$dados = $req->all(); //vai receber tudo, é um metodo pronto da classe http request importada la em cima
        Curso::create($curso); //isso salva no banco, porem tem que importar a model Curso la em cima, use Curso, SO ISSO!
        //COLOCAR NA MODEL CURSO fillable, pois ele permite colocar dados no banco em massa

        //o name dos campos do formulario é o campo que vc vai pegar do $req

        //colocar no model curso isso aqui:
        // protected $fillable = [
        //     'titulo', 'descricao', 'valor','imagem'
        // ];


        //MENSAGEM DURA APENAS UMA SESSAO A MENSAGEM, NAO FICA A MENSAGEM

        //NOme da mesagem e o conteudo em seguida:
            $req->session()->flash('mensagem','Curso de ' .$req->titulo .' adicionado com sucesso!');


        //vai redirecionar pra essa pagina, depois que salvar no banco
        return redirect()->route('admin.cursos');
            //um redirect é melhor depois de salvar, pq senao ia imendar com /salvar/admin/cursos


    }


    public function editar($id)
    {

        $curso = Curso::find($id);

        return view('admin.cursos.editar',compact('curso'));
        //levou o curso la pra view

    }

    public function atualizar(Request $req, $id)
    {
     $curso = $req->all();

     if(isset($curso['publicado'])){ //ta vendo se ta ativado ele deixa selecionado sim, senao ele deixa como desabilitado
        $curso['publicado'] = 'sim';
    }else{

        $curso['publicado'] = 'nao';
    }



     if ($req->hasFile('imagem')) {
        $curso['imagem'] = $this->tratarImagem($req, $curso);
    }


        $cursoSelecionado = Curso::find($id); //vai receber tudo, é um metodo pronto da classe http request importada la em cima
        $cursoSelecionado->update($curso); //obteve o id e faz a atualização na tabela model Curso

        $req->session()->flash('mensagem','Curso de ' .$req->titulo .' atualizado com sucesso!'); //SOMENTE PRA PEGAR A 


        return redirect()->route('admin.cursos');
      
    }


    public function deletar(Request $req ,$id)
    {
        Curso::find($id)->delete(); //busca o id correspondente e deleta do banco
        $req->session()->flash('mensagem','Curso '.$req->titulo.'removido com sucesso!'); //Nem precisava, e so pra aparecer a mensagem de deletado
        return redirect()->route('admin.cursos'); //deletar e atualizar a pagina de cursos

    }


public function tratarImagem(Request $req,$curso)
{

    $imagem = $req->file('imagem');
    $num = rand(1111, 9999);
    $dir = 'img/cursos/';
    $ext = $imagem->guessClientExtension();
    $nomeImagem = 'imagem_' . $num . '.' . $ext;
    $imagem->move($dir, $nomeImagem);

    return $dir . $nomeImagem;

}






















}
