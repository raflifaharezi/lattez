<?php

use Illuminate\Database\Seeder;

class RewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // GET PACKAGE ID 
        $gold = \App\Package::where('name', 'Gold')->first();
        $platinum = \App\Package::where('name', 'Platinum')->first();

        \App\Reward::create([
            'name'	=> 'Pajero',
            // 'sales'	=> 1,
            'reward_quantity' => 1,
            'img_path' => 'images/pajero.png',
            'package_id' => $platinum->id,
        ]);
        \App\Reward::create([
            'name'	=> 'Paket Umroh',
            // 'sales'	=> 1,
            'reward_quantity' => 2,
            'img_path' => 'images/umroh.png',
            'package_id' => $platinum->id,
        ]);
        \App\Reward::create([
            'name'	=> 'Iphone 12',
            // 'sales'	=> 1,
            'reward_quantity' => 36,
            'img_path' => 'images/iphone&emas.png',
            'package_id' => $platinum->id,
        ]);
        \App\Reward::create([
            'name'	=> '10 Gram Emas',
            // 'sales'	=> 1,
            'reward_quantity' => 36,
            'img_path' => 'images/emas.png',
            'package_id' => $platinum->id,
        ]);
        \App\Reward::create([
            'name'	=> 'Smartphone',
            // 'sales'	=> 1,
            'reward_quantity' => 180,
            'img_path' => 'images/smartphone.png',
            'package_id' => $platinum->id,
        ]);
        \App\Reward::create([
            'name'	=> '1 Gram Emas',
            // 'sales'	=> 1,
            'reward_quantity' =>360,
            'img_path' => 'images/emas.png',
            'package_id' => $platinum->id,
        ]);
        \App\Reward::create([
            'name'	=> 'Paket Umroh',
            // 'sales'	=> 1,
            'reward_quantity' => 1,
            'img_path' => 'images/umroh.png',
            'package_id' => $gold->id,
        ]);
        \App\Reward::create([
            'name'	=> 'Motor NMAX',
            // 'sales'	=> 1,
            'reward_quantity' => 8,
            'img_path' => 'images/n-max.png',
            'package_id' => $gold->id,
        ]);
        \App\Reward::create([
            'name'	=> '1 Gram Emas',
            // 'sales'	=> 1,
            'reward_quantity' => 456,
            'img_path' => 'images/emas.png',
            'package_id' => $gold->id,
        ]);
    }
}
