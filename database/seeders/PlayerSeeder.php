<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,5) as $index) {
            DB::table('players')->insert([
                'uuid' => $faker->uuid,
                'user_name' => $faker->userName,
                'free_email' => $faker->freeEmail,
                'ipv4' => $faker->ipv4,
                'mac_address' => $faker->macAddress,
            ]);
        }
    }
}
