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
        $this->call(PackageTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // $this->call(User2TableSeeder::class);
        $this->call(RewardTableSeeder::class);
        $this->call(RealUserSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
