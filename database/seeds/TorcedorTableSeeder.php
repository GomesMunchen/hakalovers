<?php

use Illuminate\Database\Seeder;

class TorcedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
          // Opção 1
         DB::table('torcedor')->insert([
         'nome' => 'Monique Gomes Henriques',
         'documento' => '000.000.000-81',
         'cep' => '72130-550',
         'endereco' => 'qnh 05',
         'bairro' => 'norte',
         'cidade' => 'Taguatinga',
         'uf' => 'DF',
         'telefone' => '(61) 98341-0301',
         'email' => 'gomesnick22@gmail.com',
         'ativo'=> '1',
         'created_at' => date('Y-m-d H:i:s')
      ]);

      // Opção 2
      factory(App\Torcedor::class, 05)->create();

    }
                }
