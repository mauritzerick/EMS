<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name'=>'Mauritz Erick',
            'email'=>'mauritz.e@enableps.com',
            'password'=>bcrypt('password')
        ]);
    }
}
