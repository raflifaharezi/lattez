<?php

namespace App\Http\Controllers\Lattez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Package;
use App\Reward;

class SalesandBonusController extends Controller
{
    public function index(){
        $user = User::with('Package')->find(auth()->user()->id);
        $package = Package::with('Reward')->get();
        if($user['package_id'] != null){
            $choosed_reward = Reward::where('package_id', $user['package_id'])->get();
        }else{
            $choosed_reward = null;
        }
        return view('pages.sales-bonus')->with('user', $user)->with('package', $package)->with('choosed_reward', $choosed_reward);
    }
    public function choosePackage(){
        return view('pages.sales-bonus')->with('package', $package);
    }
}
