<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dzaki',
            'email'=> 'dzaki.aufa.itxpro@gmail.com',
            'password'=> Hash::make('peswer'),
        ]);
    }
}
