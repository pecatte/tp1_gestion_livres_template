<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('livres')->delete();
        DB::table('livres')->insert([
            'titre' => 'La case de l\'oncle Tom',
            'resume' => 'Famile Elisa',
            'prix' => 12.5
        ]);
        DB::table('livres')->insert([
            'titre' => 'les aventures de Tom Sawyer',
            'resume' => 'Tante Poly',
            'prix' => 10
        ]);
        DB::table('livres')->insert([
            'titre' => 'Tom-Tom et Nana',
            'resume' => 'Famille Dubouchon',
            'prix' => 18
        ]);

    }
}