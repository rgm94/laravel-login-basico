<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Para crear un seeder, -> php artisan make:seeder UserSeeder
     * Para que se apliquen los cambios establecidos -> php artisan migrate:fresh --seed
     * 
     * Recordar que, para que este seeder meta información en la db tenemos que ir al DatabaseSeeder 
     * cometar código e indicar que llame a este.
     * 
     * Creamos usuario de prueba, para realizar login y comporobar funcionamiento
     * 
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Prueba',
            'email' => 'admin@prueba.com',
            'password' => Hash::make('contraseñasecreta'),
        ]);
    }
}
