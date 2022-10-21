<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/* 
php artisan make:model NomeModel -m (o -m é para criar a migrate junto)
php artisan make:migration create_nome_table
php artisan make:migration alter_objetivo_da_migrate
Rodar as migrate: php artisan migrate
*/

class Classificacao extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'classificacoes';
    protected $fillable = ['descricao'];
}
