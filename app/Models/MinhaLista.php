<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinhaLista extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem', 'user_id'];
}
