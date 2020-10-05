
@extends('layout.site')


@section('titulo','Cursos')
    

@section('conteudo')
    
<div class="container">
<br>
    <div class="row">
        <div class="col-3">
            <h4> Lista de Cursos </h4>
        </div>
        <div class="col-2">
            <a class="btn btn-success" href="{{route('admin.cursos.adicionar')}}">Adicionar  </a>
        </div>
    </div>

<br>



    {{-- improviso de mensagem de sucesso ao salvar o curso --}}

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

                @foreach ($cursos as $curso)

                    <tr>
                    <td> {{$curso->id}}</td>
                        <td> {{$curso->titulo}}</td>
                        <td> {{$curso->descricao}}</td>
                        <td>
                        <img width="70" src="{{asset($curso->imagem)}}">

                        </td>                      
                        <td> {{$curso->publicado}}</td>
                        <td> 
                        <a class="btn btn-primary" href="{{route('admin.cursos.editar',$curso->id)}}">Editar</a>
                            
                        <form method="post" action="{{route('admin.cursos.deletar',$curso->id)}}">
                           @csrf
                           @method('DELETE')
                            <button class="btn btn-danger">Deletar</button>
                        </form>
                      

                        </td>
                    </tr>


                @endforeach



               
            </tbody>


        </table>

    </div>

    


</div>

@endsection









