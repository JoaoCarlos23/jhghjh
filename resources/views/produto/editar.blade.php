

@extends('layout.site')

@section('title','Editar produto')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Editar Produto</h3>

    <form action="{{route('admin.produtos.atualizar',$produto->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf 
            {{-- sempre criar um input invisivel pra atualizar pois o html nao tem metodo put, so get e post --}}
            <input type="hidden" name="_method" value="put"> 
            @include('produto.formulario')

             <button type="submit" class="btn btn-success">Salvar Modificações </button>

         </form>

        </div>


    </div>


@endsection
