<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reward;

class RewardController extends Controller
{
    public function index()
    {
        $reward= Reward::with('Package')->paginate(5);
        return view('pages.admin.reward',[
            'reward' => $reward
        ]);
    }
}
