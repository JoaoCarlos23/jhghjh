@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    
<div class="container">
    <h3>lista de Cursos</h3>
    <div class="row">
        @foreach($cursos as $curso)
            <div class="card col-3" style="width: 18rem; margin-left: 50px">
                <img src="{{asset($curso->imagem)}}" class="card-img-top">  
                <div class="card-body">
                    <h5 class="card-title">{{ $curso->titulo }}</h5>
                    <p class="card-text">{{ $curso->descricao }}</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row d-flex flex-row justify-content-center">
        {{ $cursos->links() }}
    </div>
</div>

@endsection






