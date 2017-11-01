<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 20; $i++) {

        	DB::table('clientes')->insert([
        		'cli_name' => $faker->firstName,
        		'cli_apellido' => $faker->lastName,
        		'cli_email' => $faker->email,
        		'cli_telefono' => $faker->phoneNumber,
        	]);
        }
    }
}
