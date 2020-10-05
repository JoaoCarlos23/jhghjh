
@extends('layout.site')

@section('title','AdicionarProduto')
    


@section('conteudo')
    
    <div class="container"> <br>
        <h3>Adicionar Produtos</h3>

    <form action="{{route('admin.produtos.salvar') }}" method="post" enctype="multipart/form-data">
            @csrf 
        @include('produto.formulario')

             <button type="submit" class="btn btn-success">Salvar Produto</button>

         </form>

        </div>


    </div>


@endsection














