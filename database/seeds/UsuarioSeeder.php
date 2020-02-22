<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
        	'nome' => 'thiago',
        	'idade' => '32',
        ];

        Usuario::create($usuarios);
    }
}
