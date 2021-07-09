<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
		$admin->slug = 'admin';
		$admin->name = 'Admin';
		$admin->save();

		$member = new Role();
		$member->slug = 'member';
		$member->name = 'Member';
		$member->save();
    }
}
