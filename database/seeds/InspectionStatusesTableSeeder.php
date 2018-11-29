<?php

use Illuminate\Database\Seeder;

class InspectionStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\InspectionStatus::insert([
            'order' => 0,
            'name' => 'Scheduled',
        ]);

        \App\InspectionStatus::insert([
            'order' => 1,
            'name' => 'Complete',
        ]);

        \App\InspectionStatus::insert([
            'order' => 2,
            'name' => 'Cancelled',
        ]);
    }
}
