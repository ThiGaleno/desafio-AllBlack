<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    protected $table = 'fans';    
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'cpf', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'telefone', 'email', 'ativo'];
}
