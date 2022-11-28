<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lista extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem', 'user_id'];

    public function filmes(){
        return $this->BelongsToMany('App\Models\Filme', 'lista_filmes')->withPivot('id','created_at');
    }

    //não funcionou
    public function users(){
        //return $this->BelongsToMany('App\Models\User', 'lista_usuarios')->withPivot('created_at');
        return $this->BelongsTo('App\Models\User', 'user_id', 'id')->withPivot('created_at');
    }
}
