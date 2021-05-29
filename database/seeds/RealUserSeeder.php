<?php

use Illuminate\Database\Seeder;

class RealUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'id' => '100221.001',
            'name'	=> 'Ruri Nilasari',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.002',
            'name'	=> 'Choirul Arizal',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.006',
            'name'	=> 'Ibnu Fadillah',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.024',
            'name'	=> 'Athy Ramli',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.004',
            'name'	=> 'Alief Anugerah Sani',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.019',
            'name'	=> 'Dadang Priatna',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.028',
            'name'	=> 'Delfina Yanti',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.014',
            'name'	=> 'Dewi Yulianingsih',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.022',
            'name'	=> 'Eli',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.018',
            'name'	=> 'Eneng Sunengsih',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.015',
            'name'	=> 'Fitri Zen Zen',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.027',
            'name'	=> 'Flory',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.047',
            'name'	=> 'Heni Wahyuni',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.031',
            'name'	=> 'Herliana',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.032',
            'name'	=> 'Hodijah',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.010',
            'name'	=> 'Ika Septiana',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.016',
            'name'	=> 'M Rahmat',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.007',
            'name'	=> 'Mayang Andini',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.029',
            'name'	=> 'Nandar',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.012',
            'name'	=> 'Nia Zuniarsih',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.020',
            'name'	=> 'Nova Nityas Zesa',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.026',
            'name'	=> 'Rahlan Rusjang',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.021',
            'name'	=> 'Rizkya',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.025',
            'name'	=> 'Silma',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.005',
            'name'	=> 'Siswanto',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.017',
            'name'	=> 'Sita Yusmiar',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.030',
            'name'	=> 'Siti Jamilah',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.003',
            'name'	=> 'Siti Sopyah',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.011',
            'name'	=> 'Siti Zulaicho',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.023',
            'name'	=> 'Wahyuni',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.009',
            'name'	=> 'Yani Handayani',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.013',
            'name'	=> 'Yayah Nurhayati',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.041',
            'name'	=> 'Abu',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.034',
            'name'	=> 'Ade',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.035',
            'name'	=> 'Asep',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.040',
            'name'	=> 'Dian Mardiani',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.044',
            'name'	=> 'Fahmi',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.046',
            'name'	=> 'Mira',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.036',
            'name'	=> 'Nina Nurhasanah',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.043',
            'name'	=> 'Pudia',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.033',
            'name'	=> 'Rizal',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.038',
            'name'	=> 'Rosi G',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.042',
            'name'	=> 'Siti Mariam',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.037',
            'name'	=> 'Siti Mariam',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.039',
            'name'	=> 'Vera Cuminarsih',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);

        \App\User::create([
            'id' => '100221.045',
            'name'	=> 'Wahidin Budiman',
            'leader_id' => '100221.001',
            'password' => bcrypt('lattez2021'),
        ]);
    }
}
