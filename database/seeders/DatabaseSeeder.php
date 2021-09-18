<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleAndPermissionSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call the role and permission seeder
        $this->call(RoleAndPermissionSeeder::class);

        // Call the user seeder
        $this->call(UserSeeder::class);
    }
}
