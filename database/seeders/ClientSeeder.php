<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;



class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmed@example.com',
            'phone' => '01012345678',
            'address' => 'Cairo, Egypt',
        ]);

        Client::create([
            'name' => 'Sara Mohamed',
            'email' => 'sara@example.com',
            'phone' => '01098765432',
            'address' => 'Alexandria, Egypt',
        ]);
    }
}
