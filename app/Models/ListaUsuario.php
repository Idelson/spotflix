<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaUsuario extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'lista_id'];


    public function lista(){
        return $this->BelongsTo('App\Models\Lista', 'lista_id', 'id');//->withPivot('id');
    }

    
}
