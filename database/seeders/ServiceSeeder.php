<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'title' => 'Site vitrine optimisé',
            'description' => 'Création de site vitrine professionnel, responsive et optimisé SEO.',
            'price' => 499,
        ]);

        Service::create([
            'title' => 'Application web évolutive',
            'description' => 'Développement d’applications web et mobiles avec architecture scalable.',
            'price' => 1299,
        ]);

        Service::create([
            'title' => 'SEO premium',
            'description' => 'Optimisation avancée du référencement et des performances.',
            'price' => 799,
        ]);
        
        Service::create([
            'title' => 'Branding digital',
            'description' => 'Création d’une identité visuelle forte et cohérente pour vos projets digitaux.',
            'price' => 599,
        ]);

        Service::create([
            'title' => 'Maintenance évolutive',
            'description' => 'Suivi continu, mises à jour et évolutions pour garantir la pérennité de vos projets.',
            'price' => 299,
        ]);
    }
}
