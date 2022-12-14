<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SystemSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:seed {--base} {--test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed System';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->option('base')) {
            $this->call('migrate:fresh', ['--force']);
        }

        $this->info('Seeding: Liste des Catégorie du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileCategorySeeder', 'force']);

        $this->info('Seeding: Liste des Service du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileServiceSeeder', 'force']);

        $this->info('Seeding: Liste des Spécificité des service du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileServiceSpecSeeder', 'force']);

        $this->info('Seeding: Liste des tarifs des services du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileServicePriceSeeder', 'force']);

        $this->info('Seeding: Liste des tarifs des options du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileServiceOptionSeeder', 'force']);

        $this->info('Seeding: Liste des produits du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileProductSeeder', 'force']);

        $this->info('Seeding: Liste des tarifs de produits du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileProductPriceSeeder', 'force']);

        $this->info('Seeding: Liste des offres de produits du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileProductOfferSeeder', 'force']);

        $this->info('Seeding: Liste des Spécificités de produits du secteur "Mobile"');
        $this->call('db:seed', ['class' => 'MobileProductSpecSeeder', 'force']);

        $this->info('Seeding: Liste des Offres Internet du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomInternetOfferSeeder', 'force']);

        $this->info('Seeding: Liste des service des Offres Internet du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomInternetServiceSeeder', 'force']);

        $this->info('Seeding: Liste des categorie matériel du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomProductCategorySeeder', 'force']);

        $this->info('Seeding: Liste des matériel du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomProductSeeder', 'force']);

        $this->info('Seeding: Liste des services du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomServicePriceSeeder', 'force']);

        $this->info('Seeding: Liste des offres SIP TRUNK du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomSipOfferSeeder', 'force']);

        $this->info('Seeding: Liste des offres SMS du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomSmsOfferSeeder', 'force']);

        $this->info('Seeding: Liste des offres VOIP du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomVoipOfferSeeder', 'force']);

        $this->info('Seeding: Liste des services des offres VOIP du secteur "Telecom"');
        $this->call('db:seed', ['class' => 'TelecomVoipServiceSeeder', 'force']);

        $this->info('Seeding: Liste des NRO disponible');
        $this->call('db:seed', ['class' => 'TelecomNroSeeder', 'force']);

        return 0;
    }
}
