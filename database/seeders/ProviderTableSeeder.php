<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\Provider\ProviderRepository;
use App\Models\Provider\Provider;
class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ProviderRepository $providers)
    {
        \DB::table('provider')->truncate();
        $url = $providers->getUrl();
        $provs = $providers->getProvider($url);
        foreach ($provs as $prov){
            $provider = Provider::create([
                'task'              => $prov['id'] ?? '',
                'time'              => $prov['sure'] ?? '',
                'difficulty'        => $prov['zorluk'] ?? '',
                'date_created'		=> now(),
                'date_modified'		=> now()
            ]);
        }

    }
}
