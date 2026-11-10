<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
        'nome_loja',
        'entrega',
        'funcionario',
        'telefone',
    ];
}
