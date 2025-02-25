<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $total_records = 20;
        $this->command->warn(PHP_EOL . 'Start: Creating Countries');

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Country::truncate();

        $this->command->getOutput()->progressStart($total_records);

        // Manually create a few countries
        Country::create([
            'iso2' => 'US',
            'name' => 'United States',
            'status' => 1,
            'phone_code' => '+1',
            'iso3' => 'USA',
            'region' => 'Americas',
            'subregion' => 'Northern America',
        ]);

        // Loop to create random countries
        for ($i = 0; $i < $total_records - 2; $i++) {
            Country::create([
                'iso2' => strtoupper(Str::random(2)), // Random 2-letter ISO code
                'name' => 'Country ' . ($i + 1), // Example country name
                'status' => rand(0, 1), // Random status (active or inactive)
                'phone_code' => '+' . rand(1, 999), // Random phone code
                'iso3' => strtoupper(Str::random(3)), // Random 3-letter ISO code
                'region' => 'Region ' . rand(1, 5), // Random region
                'subregion' => 'Subregion ' . rand(1, 5), // Random subregion
            ]);

            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
        $this->command->info('End: Creating Countries');
    }
}
