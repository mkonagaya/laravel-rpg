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
            CharacterModelsTableSeeder::class,
            CharacterModelTypesTableSeeder::class,
            XiensTableSeeder::class,
            ManualAllocationsTableSeeder::class,
        ]);
    }
}
