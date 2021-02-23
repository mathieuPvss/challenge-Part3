<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'Ynov',
            'email' => 'test@ynov.com',
            'password' => bcrypt("test1234"),
            'admin' => true
        ]);

        User::create([
            'nom' => 'Google',
            'email' => 'test@gmail.com',
            'password' => bcrypt("test1234"),
            'admin' => false
        ]);
    }
}
