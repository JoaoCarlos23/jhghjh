<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    

    public function users()
    {
        //model de contato

        return $this->belongsTo(User::class);

    //1 contato  pertence a um usuario
    }







    
}
