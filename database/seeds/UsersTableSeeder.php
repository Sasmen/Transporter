<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);


        DB::table('users')->insert([
            'name' => 'monia',
            'email' => 'monia'.'@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);

        DB::table('users')->insert([
            'name' => 'bartek',
            'email' => 'bartek'.'@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);

        DB::table('users')->insert([
            'name' => 'magda',
            'email' => 'magda'.'@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);


        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'driver',
        ]);


        $magda = App\User::where('name', '=', 'admin')->first();
        $role =  App\Role::where('name', '=', 'admin')->first();
        $magda->attachRole($role);
    }
}