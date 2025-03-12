<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadModelSeeder extends Seeder
{
    public function run(): void
    {
        $total_records = 20;
        ## Starting message
        $this->command->warn(PHP_EOL . 'Start: Creating Leads');

        ## Truncate existing records
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Lead::truncate(); 

        ## Starting progressbar
        $this->command->getOutput()->progressStart($total_records);

        $country_ids = [1, 2, 3, 4]; 

        for ($i = 0; $i < $total_records; $i++) {
            Lead::create([
                'name' => 'Lead ' . ($i + 1), 
                'email' => 'lead' . ($i + 1) . '@example.com',
                'country_id' => $country_ids[array_rand($country_ids)], 
                'mobile_number' => '01712' . rand(1000000, 9999999), 
                'message' => 'This is a message from lead ' . ($i + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->command->getOutput()->progressAdvance(); // Progress advance
        }

        ## Finished progressbar and success message
        $this->command->getOutput()->progressFinish();
        $this->command->info('End: Creating Leads');
    }
}
