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
            'department_id'=>'1',
            'role_id'=>'1',
            'designation'=>'Administrator',
            'start_from'=>'2021-06-01',
            'image'=>'avatar2.png'
        ]);

        // User::create([
        //     'name'=>'User 2',
        //     'email'=>'2@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'department_id'=>'2',
        //     'role_id'=>'2',
        //     'designation'=>'Sydney',
        //     'start_from'=>'2021-06-02',
        //     'image'=>'avatar2.png'
        // ]);

         // User::create([
        //     'name'=>'User 3',
        //     'email'=>'3@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'department_id'=>'3',
        //     'role_id'=>'3',
        //     'designation'=>'Melbourne',
        //     'start_from'=>'2021-06-03',
        //     'image'=>'avatar2.png'
        // ]);

         // User::create([
        //     'name'=>'User 4',
        //     'email'=>'4@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'department_id'=>'4',
        //     'role_id'=>'4',
        //     'designation'=>'Melbourne',
        //     'start_from'=>'2021-06-04',
        //     'image'=>'avatar2.png'
        // ]);
    }
}
