<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Run our product seeder which also seeds categories
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
