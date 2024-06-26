<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // $faker->addProvider(new Faker\Provider\es_ES\Person($faker));
        foreach (range(1,5) as $index){
            DB::table('contacts')->insert([
                'id' => $faker->randomNumber(),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => Str::random(10).'@email.com',
            ]);
        }
    }
}
