<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 25; $i++){
            DB::table('wisata')->insert([
                'nama_wisata' => $faker->unique()->randomElement(['Alun-Alun Tegal','Bukit Cepu','Clirit View',
                    'Curug Jejeg','Curug Kaliputih','Curug Pengantin','Curug Cantel','Curug Sibedil',
                    'Danau Beko','Danawarih','Guci','Kaligua','Klenteng Tek Hay Kiong','Pantai Alam Indah',
                    'Pantai Purin','PG Pangkah','Pool Samudra','Prabalintang','Rita Park','Sindang Kemadu',
                    'Taman Oemah Pinus','Taman Poci','Telaga Cempaka','Telaga Kaliwangun','Waduk Cacaban']),
                'deskripsi'=> $faker->sentence($nbWord = 20, $variableNbWords = true),
                'wilayah_id' =>  $faker->unique()->numberBetween(1,25),
                'jam_buka' => '08:00',
                'jam_tutup' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


