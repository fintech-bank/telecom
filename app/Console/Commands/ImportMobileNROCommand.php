<?php

namespace App\Console\Commands;

use App\Models\Core\Mobile\MobileNro;
use Illuminate\Console\Command;

class ImportMobileNROCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nro:mobile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importe la liste des NRO mobiles';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $antennes = \Http::get('https://public.opendatasoft.com/api/records/1.0/search/?dataset=sites-2g-3g-4g-france-metropolitaine-mon-reseau-mobile&q=&facet=code_op&facet=nom_op&facet=nom_reg&facet=nom_dep&facet=insee_dep&facet=nom_com&facet=insee_com&facet=technologies&refine.technologies=4G')->object();
        $fields = collect($antennes->fields);
        $count = $fields->count();

        $this->info('Nombre enregistrement: '.$count);
        $bar = $this->output->createProgressBar($count);
        $bar->start();

        foreach ($fields as $liai) {
            $liaison = collect($liai)->toArray();

            MobileNro::create([
                'operator' => $liaison['nom_op'],
                'latitude' => $liaison['coordonnees'][0],
                'longitude' => $liaison['coordonnees'][1],
                'commune' => $liaison['nom_com'],
                'updated_at' => $liaison['record_timestamp']
            ]);
            $bar->advance();
        }

        $bar->finish();
        return Command::SUCCESS;
    }
}
