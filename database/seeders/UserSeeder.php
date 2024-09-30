<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Dra Anabela',
                'email' => 'DraAnabela77@gmail.com',
                'password' => Hash::make(Str::random(10))
            ],
            [
                'name' => 'Dra Anabela',
                'email' => 'DraAnabela4@gmail.com',
                'password' => Hash::make(Str::random(10))
            ],
            [
                'name' => 'Dra Anabela',
                'email' => 'DraAnabela1@gmail.com',
                'password' => Hash::make(Str::random(10))
            ]
            ]
        );
    }
}
