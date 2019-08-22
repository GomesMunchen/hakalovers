<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torcedor extends Model
{
  protected $table = 'torcedor';
  protected $fillable = [
  'nome', 'documento', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'telefone', 'email', 'ativo'
   ];

}
