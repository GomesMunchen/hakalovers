<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Torcedor::class, function (Faker $faker) {
    return [
  'nome' => $faker->name,
  'documento' => $faker->documento,
  'cep' => $faker->cep,
  'endereco' => $faker->endereco,
  'bairro' => $faker->bairro,
  'cidade' => $faker->cidade,
  'uf' => $faker->uf,
  'telefone' => $faker->telefone,
  'email' => $faker->unique()->safeEmail,
  'ativo' => $faker->ativo,
  ];
});
