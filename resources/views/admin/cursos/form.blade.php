
<div style="width: 50%">
                <div class="form-group">
                    <label for="titulo"> Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                      value="{{$curso->titulo ?? ''}}">
                    {{-- operador ternario com logica de php pra saber se ele tem disponivel ou nao o curso --}}


                </div>
                <div class="form-group">
                    <label for="descricao"> Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao"
                    value="{{$curso->descricao ?? ''}}">              
              
                </div>
                <div class="form-group">
                    <label for="valor"> Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor"
                    value="{{$curso->valor ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="imagem"> Imagem</label>
                    <input type="file" class="form-control-file" id="imagem" name="imagem">
                </div>

             @if(isset($curso->imagem))
                 <div class="form-group">
                     <img width="120" src="{{asset($curso->imagem)}}" />
                 </div>
             @endif

                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="publicado" name="publicado" {{isset($curso->publicado) && $curso->publicado == 'sim' ? 'checked' : ''}} value="true">
                        <label class="form-check-label" for="publicado" >Publicado?</label>
                    </div>
                </div>
















