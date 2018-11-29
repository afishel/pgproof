<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CompaniesTableSeeder::class,
            OrganizationsTableSeeder::class,
            SitesTableSeeder::class,
            InspectionStatusesTableSeeder::class,
            InspectionTypesTableSeeder::class,
            InspectionsTableSeeder::class,
        ]);
    }
}
