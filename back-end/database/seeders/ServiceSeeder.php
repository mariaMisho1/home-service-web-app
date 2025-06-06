<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            // Services de nettoyage (Cleaning Services)
            [
                'service_name' => 'Nettoyage en profondeur',
                'description' => 'Nettoyage complet pour raviver votre intérieur en profondeur.',
                'price' => 80.00,
                'duration' => '120 minutes+',
                'image' => 'images/services/Nettoyage en profondeur.jpg',
                'service_status' => 'active',
                'popularity' => 5,
                'category_id' => 1,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Nettoyage de vitres',
                'description' => 'Nettoyage impeccable de vos fenêtres et surfaces vitrées.',
                'price' => 30.00,
                'duration' => '30-60 minutes',
                'image' => 'images/services/Nettoyage de vitres.jpg',
                'service_status' => 'active',
                'popularity' => 9,
                'category_id' => 1,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Nettoyage de tapis et moquettes',
                'description' => 'Nettoyage en profondeur de vos tapis et moquettes pour un aspect neuf.',
                'price' => 60.00,
                'duration' => '60-120 minutes',
                'image' => 'images/services/Nettoyage de tapis et moquettes.jpg',
                'service_status' => 'active',
                'popularity' => 8,
                'category_id' => 1,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Nettoyage après déménagement',
                'description' => 'Nettoyage complet de votre ancien logement pour le laisser impeccable.',
                'price' => 9.99,
                'duration' => '9.99',
                'image' => 'images/services/Nettoyage après déménagement.jpg',
                'service_status' => 'active',
                'popularity' => 3,
                'category_id' => 1,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Maintenance et Réparations (Maintenance & Repair)
            [
                'service_name' => 'Réparation de plomberie',
                'description' => 'Dépannage rapide de vos fuites et problèmes de plomberie.',
                'price' => 70.00,
                'duration' => '9.99',
                'image' => 'images/services/Réparation de plomberie.jpg',
                'service_status' => 'active',
                'popularity' => 4,
                'category_id' => 2,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Réparation électrique',
                'description' => 'Dépannage de vos installations électriques par un professionnel.',
                'price' => 80.00,
                'duration' => '9.99',
                'image' => 'images/services/Réparation électrique.jpg',
                'service_status' => 'active',
                'popularity' => 7,
                'category_id' => 2,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Montage de meubles',
                'description' => 'Montage efficace de vos meubles en kit par un professionnel.',
                'price' => 40.00,
                'duration' => '30 minutes - 1 heure',
                'image' => 'images/services/Montage de meubles.jpg',
                'service_status' => 'active',
                'popularity' => 2,
                'category_id' => 2,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Réparation d\'électroménager',
                'description' => 'Dépannage et réparation de vos appareils électroménagers.',
                'price' => 9.99,
                'duration' => '9.99',
                'image' => 'images/services/Réparation d\'électroménager.jpg',
                'service_status' => 'active',
                'popularity' => 6,
                'category_id' => 2,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Pose de cadres et étagères',
                'description' => 'Fixation murale de vos cadres et étagères en toute sécurité.',
                'price' => 25.00,
                'duration' => '30 minutes - 1 heure',
                'image' => 'images/services/Pose de cadres et étagères.jpg',
                'service_status' => 'active',
                'popularity' => 9,
                'category_id' => 2,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Jardinage et Aménagement Paysager (Gardening & Landscaping)
            [
                'service_name' => 'Tonte de gazon',
                'description' => 'Entretien régulier de votre gazon pour un jardin impeccable.',
                'price' => 30.00,
                'duration' => '9.99 (selon la surface)',
                'image' => 'images/services/Tonte de gazon.jpg',
                'service_status' => 'active',
                'popularity' => 3,
                'category_id' => 3,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Taille de haies et arbustes',
                'description' => 'Taille et entretien de vos haies et arbustes pour une forme harmonieuse.',
                'price' => 40.00,
                'duration' => '9.99 (selon la taille et la quantité)',
                'image' => 'images/services/Taille de haies et arbustes.jpg',
                'service_status' => 'active',
                'popularity' => 8,
                'category_id' => 3,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Entretien du jardin',
                'description' => 'Entretien complet de votre jardin pour le maintenir en bonne santé.',
                'price' => 9.99,
                'duration' => '9.99 (selon la surface et les besoins)',
                'image' => 'images/services/Entretien du jardin.jpg',
                'service_status' => 'active',
                'popularity' => 5,
                'category_id' => 3,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Création de potager',
                'description' => 'Conception et installation de votre potager pour cultiver vos propres fruits et légumes.',
                'price' => 9.99,
                'duration' => '9.99 (selon la taille et la complexité)',
                'image' => 'images/services/Création de potager.jpg',
                'service_status' => 'active',
                'popularity' => 2,
                'category_id' => 3,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Pose de clôture et portail',
                'description' => 'Installation de clôture et portail pour sécuriser votre jardin.',
                'price' => 9.99,
                'duration' => '9.99 (selon la longueur et le type)',
                'image' => 'images/services/Pose de clôture et portail.jpg',
                'service_status' => 'active',
                'popularity' => 6,
                'category_id' => 3,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Contrôle des pestes (Pest Control)
            [
                'service_name' => 'Dératisation de maison individuelle',
                'description' => 'Intervention rapide et efficace pour éliminer les rats et souris de votre habitation.',
                'price' => 150.00,
                'duration' => '9.99',
                'image' => 'images/services/Dératisation de maison individuelle.jpg',
                'service_status' => 'active',
                'popularity' => 9,
                'category_id' => 4,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Désinsectisation',
                'description' => 'Elimination de tous types d\'insectes nuisibles (cafards, moustiques, etc.).',
                'price' => 120.00,
                'duration' => '9.99',
                'image' => 'images/services/Désinsectisation.jpg',
                'service_status' => 'active',
                'popularity' => 4,
                'category_id' => 4,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Désinfection',
                'description' => 'Assainissement de votre logement contre les virus, bactéries et allergènes.',
                'price' => 80.00,
                'duration' => '9.99',
                'image' => 'images/services/Désinfection.jpg',
                'service_status' => 'active',
                'popularity' => 7,
                'category_id' => 4,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Traitement anti-termites',
                'description' => 'Protection de votre habitation contre les termites et invasions de bois.',
                'price' => 9.99,
                'duration' => '9.99',
                'image' => 'images/services/Traitement anti-termites.jpg',
                'service_status' => 'active',
                'popularity' => 3,
                'category_id' => 4,
                'provider_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Traitement anti-punaises de lit',
                'description' => 'Elimination définitive des punaises de lit et leurs œufs.',
                'price' => 9.99,
                'duration' => '9.99',
                'image' => 'images/services/Traitement anti-punaises de lit.jpg',
                'service_status' => 'active',
                'popularity' => 6,
                'category_id' => 4,
                'provider_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }
    }
}
