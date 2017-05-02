<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('drivers')->insert([
            'forename' => 'monia',
            'surname' => 'siulinska',
            'phone' => '123456789',
            'commencement' => date("Y-m-d"),
            'user_id' => App\User::where('name', '=', 'monia')->first()->id,

        ]);


        DB::table('drivers')->insert([
            'forename' => 'bartek',
            'surname' => 'redziniak',
            'phone' => '123456789',
            'commencement' => date("Y-m-d"),
            'user_id' => App\User::where('name', '=', 'bartek')->first()->id,
        ]);


        DB::table('drivers')->insert([
            'forename' => 'magda',
            'surname' => 'siulinska',
            'phone' => '123456789',
            'commencement' =>  date("Y-m-d"),
            'user_id' => App\User::where('name', '=', 'magda')->first()->id,
        ]);
    }
}