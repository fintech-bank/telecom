<?php

namespace Database\Seeders;

use App\Models\Core\Mobile\MobileServiceOption;
use Illuminate\Database\Seeder;

class MobileServiceOptionSeeder extends Seeder
{
    public function run()
    {
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Renvoie appel', 'price' => 0.05]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Envoie de carte SIM', 'price' => 10.00]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Changement de carte SIM / eSIM et téléchargement eSIM', 'price' => 10.00]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Portabilité du numéro', 'price' => 0]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Changement de numéro de téléphone', 'price' => 5]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Envoie du mobile', 'price' => 10]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Duplicata de facture', 'price' => 7.50]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Pénalité de retard', 'price' => 7.50]);

        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 3XXXX', 'price' => 0]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 4XXXX', 'price' => 0.05]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 5XXXX', 'price' => 0.20]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 6XXXX', 'price' => 0.50]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 7XXXX', 'price' => 0.99]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 8XXXX', 'price' => 9.99]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service SMS+ 9XXXX', 'price' => 10]);

        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service Abonnement SMS+ 48 XXX', 'price' => 0.05]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service Abonnement SMS+ 58 XXX', 'price' => 0.20]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service Abonnement SMS+ 68 XXX', 'price' => 0.35]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service Abonnement SMS+ 78 XXX', 'price' => 0.50]);
        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service Abonnement SMS+ 88 XXX', 'price' => 3]);

        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service DATA 10Go supplémentaire', 'price' => 1.99]);

        MobileServiceOption::create(['mobile_category_id' => 2, 'name' => 'Service DATA 10Go supplémentaire', 'price' => 1.99]);
    }
}
