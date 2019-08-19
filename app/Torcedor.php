<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torcedor extends Model
{
  protected $fillable = [
  'nome', 'documento', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'telefone', 'email', 'ativo'
     ];
}
