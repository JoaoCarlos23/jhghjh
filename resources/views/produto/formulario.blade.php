

                <div class="form-group">
                    <label for="nome"> Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" 
                    value="{{$produto->nome ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="descricao"> Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao"
                    value="{{$produto->descricao ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="valor"> Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor"
                    value="{{$produto->valor ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="imagem"> Imagem</label>
                    <input type="file" class="form-control-file" id="imagem" name="imagem">
                </div>

                @if(isset($produto->imagem))
                 <div class="form-group">
                     <img width="120" src="{{asset($produto->imagem)}}" >
                 </div>
             @endif

                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="publicado" name="publicado" {{isset($produto->publicado) && $produto->publicado == 'sim' ? 'checked' : ''}} value="true" >
                        <label class="form-check-label" for="publicado" >Publicado?</label>
                    </div>
                </div>












