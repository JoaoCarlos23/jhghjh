<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    //aqui é os filables que precisa pra salvar no banco, o que sera salvo!
    protected $fillable = [
        'titulo', 'descricao', 'valor','imagem','publicado'
    ];




}
