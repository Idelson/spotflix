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

    public function user(){
        return $this->BelongsTo('App\Models\User', 'user_id', 'id');
    }
}
