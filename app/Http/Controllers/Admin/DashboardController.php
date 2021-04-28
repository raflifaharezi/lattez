<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Reward;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $reward = Reward::count();
        return view('pages.admin.dashboard',[
            'user' => $user,
            'reward' => $reward
        ]);
    }
}
