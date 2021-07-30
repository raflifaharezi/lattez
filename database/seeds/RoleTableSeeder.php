<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = Role::create([
        //     'slug' => 'admin',
        //     'name' => 'Admin',
        // ]);
        
        $admin = new Role();
		$admin->slug = 'admin';
		$admin->name = 'Admin';
		$admin->save();

        // $member = Role::create([
        //     'slug' => 'member',
        //     'name' => 'Member',
        // ]);

		$member = new Role();
		$member->slug = 'member';
		$member->name = 'Member';
		$member->save();
    }
}
