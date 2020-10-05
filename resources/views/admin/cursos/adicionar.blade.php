@extends('layout.site')

@section('title','adicionarcurso')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Adicionar Cursos</h3>

    <form action="{{route('admin.cursos.salvar') }}" method="post" enctype="multipart/form-data">
            {{-- OBRIGATORIO ISSO NO FORMULARIO ACIMA E CRIAR O DIRETORIO QUE VAI FICAR AS IMAGENS(PUBLIC/IMG), HABILITAR PERMISSAO NO TERMINAL COM CHOWN OU STORAGE 777--}}
        @csrf 
        @include('admin.cursos.form')

             <button type="submit" class="btn btn-success">Salvar Curso </button>

         </form>

        </div>


    </div>


@endsection
















