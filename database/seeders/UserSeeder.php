<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Vider la table
        DB::table('users')->delete();

        // Créer les utilisateurs avec Hash::make()
        User::create([
            'name' => 'Administrateur',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'), // ← IMPORTANT: Utiliser Hash::make()
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Utilisateur Standard',
            'email' => 'user@test.com',
            'password' => Hash::make('password'), // ← IMPORTANT: Utiliser Hash::make()
            'role' => 'user',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Jean Dupont',
            'email' => 'jean@test.com',
            'password' => Hash::make('password'), // ← IMPORTANT: Utiliser Hash::make()
            'role' => 'user',
            'email_verified_at' => now(),
        ]);
    }
}