<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/* para gravar no banco de dados foi usado o Eloquent ORM - php artisan tinker*/

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['descricao']; /* permite que seja usado o método estático atraves de array associativo */
}
