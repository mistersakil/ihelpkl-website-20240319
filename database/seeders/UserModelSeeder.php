<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $total_records = 20;
        ## Starting message
        $this->command->warn(PHP_EOL . 'Start: Creating Users');
        ## Truncate existing records
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        ## Starting progressbar
        $this->command->getOutput()->progressStart($total_records);

        $password = '12345678#';
        User::create([
            'name'              => 'Super Admin',
            'email'             => 'admin@gmail.com',
            'password'          => $password,
            'is_active'         => '1',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        User::create([
            'name'              => 'sakil jomadder',
            'email'             => 'sakil@gmail.com',
            'password'          => $password,
            'is_active'         => '1',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        for ($i = 0; $i < $total_records; $i++) {
            User::create([
                'name'          => fake()->name(),
                'email'         => fake()->unique()->safeEmail(),
                'is_active'    => (string) rand(0, 1),
                'password'      => $password,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
            $this->command->getOutput()->progressAdvance();
        }

        ## Finished progressbar and success message
        $this->command->getOutput()->progressFinish();
        $this->command->info('End: Creating Users');
    }
}