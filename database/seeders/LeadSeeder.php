<?php

namespace Database\Seeders;

use App\Models\DemoRequest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadSeeder extends Seeder
{
    public function run(): void
    {
        $total_records = 20;
        ## Starting message
        $this->command->warn(PHP_EOL . 'Start: Creating Leads');

        ## Truncate existing records
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DemoRequest::truncate(); // Truncate the 'leads' table

        ## Starting progressbar
        $this->command->getOutput()->progressStart($total_records);

        // You can change these to match your actual country_id and product_id
        $country_ids = [1, 2, 3, 4]; // Example country IDs
        $product_ids = [1, 2, 3, 4]; // Example product IDs

        // Manually create a few leads
        DemoRequest::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'country_id' => $country_ids[array_rand($country_ids)], // Random country_id
            'mobile_number' => '1234567890',
            'product_id' => $product_ids[array_rand($product_ids)], // Random product_id
            'message' => 'I am interested in your product.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Loop to create random leads
        for ($i = 0; $i < $total_records; $i++) {
            DemoRequest::create([
                'name' => 'Lead ' . ($i + 1), // Example lead name
                'email' => 'lead' . ($i + 1) . '@example.com',
                'country_id' => $country_ids[array_rand($country_ids)], // Random country_id
                'mobile_number' => '1234567' . rand(100, 999), // Random mobile number
                'product_id' => $product_ids[array_rand($product_ids)], // Random product_id
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
