<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'name' => 'mercedes',
            'capacity' => '20',
            'payload' => '1000',
            'registration' => '1234567',
            'combustion' => '15',
        ]);

        DB::table('vehicles')->insert([
            'name' => 'audi',
            'capacity' => '10',
            'payload' => '2000',
            'registration' => '78945121',
            'combustion' => '20',
        ]);

        DB::table('vehicles')->insert([
            'name' => 'skoda',
            'capacity' => '10',
            'payload' => '500',
            'registration' => '78945120',
            'combustion' => '30',
        ]);

        DB::table('vehicles')->insert([
            'name' => 'mercedes',
            'capacity' => '19',
            'payload' => '1071',
            'registration' => '4512784',
            'combustion' => '28',
        ]);
    }
}
