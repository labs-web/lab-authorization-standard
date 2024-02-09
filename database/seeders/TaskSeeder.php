<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'nom' => 'Planification',
                'description' => 'Nous devons ajouter notre planification selon notre Backlog',
                'projetId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nom' => 'Rapport',
                'description' => 'Nous devons ajouter un rapport comprenant nos données et informations de projet.',
                'projetId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nom' => 'présentation',
                'description' => 'Nous devons faire une présentation professionnelle sur notre projet.',
                'projetId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nom' => 'Cahier de charges',
                'description' => 'Nous devons établir notre cahier des charges du projet pour savoir ce dont nous avons besoin et ce qu\'il faut faire.',
                'projetId' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
 
        ]);
    }
}
