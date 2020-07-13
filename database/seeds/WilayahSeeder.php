<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i <= 25; $i++) {



        // insert data ke table wilayah
        DB::table('wilayah')->insert([
            'nama_wilayah' => $faker->city,
            'pdf' => 'document/6A_17090087.pdf',
            'created_at' => now(),
            'updated_at' => now()
            ]);
        }
    }
    }
