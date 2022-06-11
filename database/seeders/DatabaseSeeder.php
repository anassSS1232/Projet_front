<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeds\PermissionsTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
