<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 ; $i<10; $i++)
        {
            DB::table('registers')->insert([
                'id' => $i +1,
                'full_name' => Str::random(10),
                'username' => Str::random(10),
                'email' => Str::random(6) . '@gmail.com',
                'contact' => '98989898' . ($i +1) . ($i +2),
                'password' => Hash::make('sameer'),
                'profile' => 'storage/images/' . Str::random(5) . 'jpeg',
                'created_at' => '2021-08-31',
                'updated_at' => '2021-08-31'
            ]);
        }
    }
}
