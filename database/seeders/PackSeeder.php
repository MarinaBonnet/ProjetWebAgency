<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pack;

class PackSeeder extends Seeder
{
    public function run(): void

    {
        Pack::create([
            'title' => 'Pack Starter',
            'description' => 'Site vitrine simple',
            'price' => 499,
        ]);

        Pack::create([
            'title' => 'Pack Pro',
            'description' => 'Site e-commerce complet',
            'price' => 1299,
        ]);
    }
}