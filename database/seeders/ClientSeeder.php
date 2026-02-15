<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'المزاوي للعقارات', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 1, 'is_active' => true],
            ['name' => 'نور الشام', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 2, 'is_active' => true],
            ['name' => 'Abby Physics', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 3, 'is_active' => true],
            ['name' => 'المهندس العقارية', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 4, 'is_active' => true],
            ['name' => 'شلال', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 5, 'is_active' => true],
            ['name' => 'ميهن', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 6, 'is_active' => true],
            ['name' => 'مس الرياض', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 7, 'is_active' => true],
            ['name' => 'كنز', 'logo' => 'img/logo100.webp', 'website_url' => '#', 'order' => 8, 'is_active' => true],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
