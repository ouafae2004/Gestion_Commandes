<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nom' => 'salma',
                'prenom' => 'saisie',
                'email' => 'saisie@example.com',
                'password' => Hash::make('password'),
                'code_barre' => 'SAL12345',
                'etat_id' => 2, // En saisie
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Ali',
                'prenom' => 'Ramasseur',
                'email' => 'ramasseur@example.com',
                'password' => Hash::make('password'),
                'code_barre' => 'RAM12345',
                'etat_id' => 3, // En ramassage
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Sara',
                'prenom' => 'Contrôle',
                'email' => 'controle@example.com',
                'password' => Hash::make('password'),
                'code_barre' => 'CON12345',
                'etat_id' => 4, // En contrôle
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Omar',
                'prenom' => 'Caissier',
                'email' => 'caissier@example.com',
                'password' => Hash::make('password'),
                'code_barre' => 'CAI12345',
                'etat_id' => 5, // En caisse
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Yassine',
                'prenom' => 'Expéditeur',
                'email' => 'expediteur@example.com',
                'password' => Hash::make('password'),
                'code_barre' => 'EXP12345',
                'etat_id' => 6, // En expédition
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }        
}
