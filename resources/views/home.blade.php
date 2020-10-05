@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    
<div class="container">

    <h3>lista de Cursos</h3>
    <div class="row">
        @foreach($cursos as $curso)
        <div class="card col-3" style="width: 18rem; ">
        <img src="{{asset($cursos->imagem)}}" >

        
        </div>

    </div>


</div>


@endsection






