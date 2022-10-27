<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filme extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['titulo', 'ano', 'duracao', 'avaliacao', 'imagem', 'classificacoe_id'];
}
