<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'ano', 'duracao', 'imagem', 'classificacoe_id'];
    
    
    public function classificacao(){
        //tras para classe filme os atributos da classe classificação
        return $this->belongsTo('App\Models\Classificacao','classificacoe_id', 'id');
    }
    
}
