<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    

    //aqui é os filables que precisa pra salvar no banco, o que sera salvo!
    protected $fillable = [
        'nome', 'descricao', 'valor','imagem','publicado'
    ];




}
