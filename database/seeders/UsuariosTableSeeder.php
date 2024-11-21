<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nome' => 'Cidele',
                'email' => 'cidele@example.com',
                'senha' => Hash::make('123'), 
                'tipo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Conceição',
                'email' => 'conceicao@example.com',
                'senha' => Hash::make('123'),
                'tipo' => 2, // Moderador
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carrara',
                'email' => 'carrara@example.com',
                'senha' => Hash::make('123'),
                'tipo' => 3, // Editor
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Cleber',
                'email' => 'cleber@example.com',
                'senha' => Hash::make('123'),
                'tipo' => 4, // Visualizador
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
