<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("Asia/Jakarta");
        $expired = date("Y-m-d H:i:s", strtotime("+4 months"));
        $leader_id = '#LTZU'.date('YmdHis').strtoupper(Str::random(3));
        \App\User::create([
            // LTZU19042021AKD 
            'id' => $leader_id,
            'name'	=> 'Ryan Pandu',
            'email'	=> '1910036@gmail.com',
            'sales'	=> 3600,
            'phone' => '087770300417',
            'address' => 'Taman Raya Citayam',
            'package_id' => 2,
            'reward_expired' => $expired,
            'password' => bcrypt('okeoke'),
        ]);
        \App\User::create([
            'id' => '#LTZU'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Rafli Fahrezi',
            'email'	=> 'rafligoodboy@gmail.com',
            'sales'	=> 55,
            'phone' => '0989354353425',
            'address' => 'Curug 45',
            'password' => bcrypt('okeoke'),
        ]);
        \App\User::create([
            'id' => '#LTZU'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Fahmi Anis',
            'email'	=> 'fahmianis@gmail.com',
            'sales'	=> 1,
            'phone' => '087770300417',
            'address' => 'Curug 45',
            'package_id' => 1,
            'reward_expired' => $expired,
            'password' => bcrypt('okeoke'),
        ]);

        // GET LEADER ID 
        $leader = \App\User::where('email', '1910036@gmail.com')->first();

        \App\User::create([
            'id' => '#LTZU'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Alodia Putri',
            'email'	=> 'alodiaputri@gmail.com',
            'sales'	=> 23,
            'phone' => '083432423',
            'address' => 'Puri Nirwana',
            'leader_id' => $leader_id,
            'password' => bcrypt('okeoke'),
        ]);
        \App\User::create([
            'id' => '#LTZU'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Jihan Sakila',
            'email'	=> 'jian@gmail.com',
            'sales'	=> 3,
            'phone' => '087770300417',
            'address' => 'Kemang Village',
            'leader_id' => $leader_id,
            'password' => bcrypt('okeoke'),
        ]);
        \App\User::create([
            'id' => '#LTZU'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Fauziah Sayuti',
            'email'	=> 'fauziah@gmail.com',
            'sales'	=> 4,
            'phone' => '0934242344',
            'address' => 'Cibinong',
            'leader_id' => $leader_id,
            'password' => bcrypt('okeoke'),
        ]);
        \App\User::create([
            'id' => '#LTZU'.date('YmdHis').strtoupper(Str::random(3)),
            'name'	=> 'Dwinta Alanis',
            'email'	=> 'dwinta@gmail.com',
            'sales'	=> 10,
            'phone' => '04543543543',
            'address' => 'Pondok Rajeg',
            'leader_id' => $leader_id,
            'password' => bcrypt('okeoke'),
        ]);
    }
}
