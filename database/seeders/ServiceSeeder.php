<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liste de services avec descriptions et caractéristiques enrichies
        $services = [
            [
                'nom' => 'Domiciliation d\'entreprise',
                'description' => 'Fourniture d\'une adresse professionnelle prestigieuse pour votre société, incluant la gestion du courrier, l\'accès à des services administratifs et la possibilité d\'enregistrer votre siège social dans un emplacement stratégique.',
                'caracteristique' => 'Flexible, conforme aux normes légales, accompagnement administratif inclus',
            ],
            [
                'nom' => 'Appui technique et financier',
                'description' => 'Accompagnement personnalisé pour les entreprises comprenant une expertise technique (conseils en informatique, optimisation de processus) et un soutien financier (recherche de financements, montage de dossiers de subventions, gestion budgétaire).',
                'caracteristique' => 'Expertise multi-domaines, solutions sur mesure, réseau de partenaires financiers',
            ],
            [
                'nom' => 'Location d\'espace',
                'description' => 'Mise à disposition d\'espaces de travail modernes tels que bureaux privatifs, salles de réunion ou espaces de coworking, équipés de connexion Internet haut débit, mobilier ergonomique et services associés (accueil, ménage, café).',
                'caracteristique' => 'Infrastructure moderne, équipements haut de gamme, contrats flexibles',
            ],
        ];

        // Insérer les services dans la base de données
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}