<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i<=50; $i++)
        {
            DB::table('banks')->insert([
                'statement' => $faker->sentence(),
                'qty' => $faker->numberBetween(1,10),
                'category_id' => $faker->numberBetween(1,5),
            ]);
        }
    }
}
