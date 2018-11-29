<?php

use Illuminate\Database\Seeder;
use \App\InspectionType;

class InspectionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InspectionType::insert([
            'order' => 0,
            'name' => 'High Frequency',
            'is_equipment_based' => 0,
            'is_standard' => 1,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Low Frequency',
            'is_equipment_based' => 1,
            'is_standard' => 1,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'ADA',
            'is_equipment_based' => 0,
            'is_standard' => 1,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Restroom Inspection',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Trail Inspection',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Skate Park Inspection',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Custodial',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Basketball Court Inspection',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Tennis Court Inspection',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);

        InspectionType::insert([
            'order' => 0,
            'name' => 'Boardwalks and Bridges',
            'is_equipment_based' => 0,
            'is_standard' => 0,
        ]);
    }
}
