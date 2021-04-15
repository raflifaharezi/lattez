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
        \App\Reward::create([
            // 'id' => '#LTZRWRD'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Pajero',
            'sales'	=> 1,
        ]);
        \App\Reward::create([
            // 'id' => '#LTZRWRD'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Paket Umroh',
            'sales'	=> 1,
        ]);
        \App\Reward::create([
            // 'id' => '#LTZRWRD'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Iphone 12',
            'sales'	=> 1,
        ]);
    }
}
