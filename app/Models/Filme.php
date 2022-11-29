<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filme extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'ano', 'duracao', 'imagem', 'classificacoe_id'];
    
    
    public function classificacao(){
        //tras para classe filme os atributos da classe classificação
        return $this->belongsTo('App\Models\Classificacao','classificacoe_id', 'id'); //BelongsTo = pertence a ...
        
    }
    
}
//comando para criar model: -a é todas as estrutura, -c controller, -m migrate
//php artisan make:model NomeDaModel -a -c -m
//cria também o Factory, Seeder