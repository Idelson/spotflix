<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaFilme extends Model
{
    use HasFactory;
    protected $fillable = ['filme_id', 'lista_id'];
}
