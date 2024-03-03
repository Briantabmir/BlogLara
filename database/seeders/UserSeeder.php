<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::factory([
            'name' => 'Brian Miranda',
            'email' => 'brian@campus.monlau.com',
            'password' => bcrypt('Monlau2022')
        ]);    

        User::factory(99)->create();
    }
}
