<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileProduct;
use Illuminate\Database\Seeder;

class MobileProductSeeder extends Seeder
{
    public function run()
    {
        MobileProduct::create([
            'name' => "Galaxy Z Fold4",
            "synopsis" => "<p>Dites bonjour au Galaxy Z Fold4, le Galaxy Z Fold le plus avancé à ce jour. Son immense écran pliable vous plonge dans vos contenus préférés et vous fait passer maître du multitâche. Son processeur gravé en 4nm lui procure des performances hors du commun, pour une expérience aussi rapide que fluide. Enfin, sa matrice photo à 3 capteurs immortalise vos plus beaux clichés, de jour comme de nuit, de près comme de loin.</p>",
            "description" => "null",
            "marque" => "Samsung",
            "mobile_category_id" => 3
        ]);

        /*MobileProduct::create([
            "mobile_category_id" => "",
            "name" => "",
            "synopsis" => "",
            "description" => "",
            "marque" => ""
        ]);*/
    }
}
