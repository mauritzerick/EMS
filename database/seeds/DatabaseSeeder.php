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
            'password'=>bcrypt('password'),
            'department_id'=>'3',
            'role_id'=>4,
            'designation'=>'Administrator',
            'start_from'=>'2021-06-01',
            'image'=>'avatar2.png'
        ]);
    }
}
