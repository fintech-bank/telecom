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
        $antennes = \Http::get('https://public.opendatasoft.com/api/records/1.0/search/?dataset=buildingref-france-arcep-mobile-site-2g3g4g&q=&rows=10000&facet=op_name&facet=technology&facet=com_code&facet=com_name&facet=epci_name&facet=epci_code&facet=dep_name&facet=dep_code&facet=reg_name&facet=reg_code&refine.ds=ds')->object();
        $fields = collect($antennes->records);
        $count = $fields->count();

        $this->info('Nombre enregistrement: '.$count);
        $bar = $this->output->createProgressBar($count);
        $bar->start();

        foreach ($fields as $liai) {
            $liaison = collect($liai->fields)->toArray();

            MobileNro::create([
                'operator' => $liaison['op_name'],
                'latitude' => $liaison['geo_point_2d'][0],
                'longitude' => $liaison['geo_point_2d'][1],
                'commune' => null,
                'updated_at' => now()
            ]);
            $bar->advance();
        }

        $bar->finish();
        return Command::SUCCESS;
    }
}
