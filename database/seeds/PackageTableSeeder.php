<?php

use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Package::create([
            'name'	=> 'Gold',
            'sales' => 80000,
            'period' => 4,
        ]);
        \App\Package::create([
            'name'	=> 'Platinum',
            'sales' => 200000,
            'period' => 4,
        ]);
    }
}
