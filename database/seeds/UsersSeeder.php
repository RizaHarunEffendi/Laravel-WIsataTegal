<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'wisatategal2020@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('adminwisata2020'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 24; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email'=> $faker->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt(12345),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
