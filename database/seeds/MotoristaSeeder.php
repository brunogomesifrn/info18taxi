<?php

use Illuminate\Database\Seeder;

class MotoristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motoristas')->insert([
        	'nome' => 'Toinho', 
        	'cpf'=> '12345678901', 
        	'telefone'=>'12345678', 
        	'numero_cnh'=>'12345',
        	'sexo'=>'m',
        	'tempo_profissao'=>'1',
        	'categoria'=>'AB',
        	'user_id'=>'1',
        ]);
    }
}
