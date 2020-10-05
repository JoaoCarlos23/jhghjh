
@extends('layout.site')


@section('titulo','Produtos')
    

@section('conteudo')
    
<div class="container"><br>
    

    <div class="row">
        <div class="col-3">
            <h4> Lista de produtos </h4>
        </div>
        <div class="col-2">
            <a class="btn btn-success" href="{{route('admin.produtos.adicionar')}}">Adicionar  </a>
        </div>
    </div>

    <br>
    
    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
    @endif

    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Titulo </th>
                    <th scope="col"> Descrição</th>
                    <th scope="col">Imagem </th>
                    <th scope="col"> Publicado</th>
                    <th scope="col"> Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($produtos as $produto)

                    <tr>
                        <td> {{$produto->id}}</td>
                        <td> {{$produto->nome}}</td>
                        <td> {{$produto->descricao}}</td>
                        
                        <td>
                            <img width="70" src="{{asset($produto->imagem)}}">
    
                        </td> 

                        <td> {{$produto->publicado}}</td>
                        <td> 
                            <a class="btn btn-primary" href="{{route('admin.produtos.editar',$produto->id)}}">Editar</a>
                            <a class="btn btn-danger">Deletar</a>

                         </td>
                    </tr>


                @endforeach



               
            </tbody>


        </table>

    </div>

  

















</div>

@endsection













