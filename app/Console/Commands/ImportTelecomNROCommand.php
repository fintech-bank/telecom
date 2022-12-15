<?php

namespace App\Console\Commands;

use App\Models\Core\Telecom\TelecomNro;
use Illuminate\Console\Command;

class ImportTelecomNROCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nro:telecom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importe la liste des NRO Télécom';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $liaisons = \Http::get('https://magosm.magellium.com/geoserver/wfs?request=GetFeature&version=2.0.0&count=500000&outputFormat=application/json&typeName=magosm:france_telecom_exchange_point&srsName=EPSG:3857&bbox=-1538728.3025657746,4558105.012117158,2570526.338045301,6805965.139927621')->object();
        $features = collect($liaisons->features);
        $count = $features->count();
        $this->info('Nombre enregistrement: '.$count);
        $bar = $this->output->createProgressBar($count);
        $bar->start();

        foreach ($features as $liai) {
            $liaison = collect($liai)->toArray();
            $properties = collect($liaison['properties'])->toArray();

            TelecomNro::create([
                'id_ref' => $liaison['id'],
                'latitude' => $liaison['geometry']->coordinates[0],
                'longitude' => $liaison['geometry']->coordinates[1],
                'operator' => $properties['operator'],
                'name' => $properties['name'],
                'ref-FR-PTT' => $properties['ref-FR-PTT'],
                'ref-FR-Orange' => $properties['ref-FR-Orange'],
                'street_cabinet' => $properties['street_cabinet'],
                'description' => $properties['description'],
                'osm_timestamp' => $properties['osm_timestamp'],
                'status' => 'active'
            ]);
            $bar->advance();
        }

        $bar->finish();
        return Command::SUCCESS;
    }
}
