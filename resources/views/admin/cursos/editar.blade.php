
@extends('layout.site')

@section('title','Editar curso')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Editar Curso</h3>

    <form enctype="multipart/form-data" action="{{route('admin.cursos.atualizar',$curso->id) }}" method="post" enctype="multipart/form-data">
            @csrf 
            {{-- sempre criar um input invisivel pra atualizar pois o html nao tem metodo put, so get e post --}}
          
            <input type="hidden" name="_method" value="put"> 
            @include('admin.cursos.form')

             <button type="submit" class="btn btn-success">Salvar Modificações </button>


         </form>

        </div>


    </div>


@endsection














