<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etats')->insert([
            ['etat' => 'En saisie',     'role' => 'saisie'],
            ['etat' => 'En ramassage',  'role' => 'ramasseur'],
            ['etat' => 'En contrôle',   'role' => 'controleur'],
            ['etat' => 'En caisse',     'role' => 'caissier'],
            ['etat' => 'En expédition', 'role' => 'expediteur'],
            ['etat' => 'Validé',        'role' => 'caissier'],
            ['etat' => 'Annulé',        'role' => 'ramasseur'],
        ]);
    }
}
