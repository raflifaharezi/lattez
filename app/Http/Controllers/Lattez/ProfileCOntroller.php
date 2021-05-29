<?php

namespace App\Http\Controllers\Lattez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index(){
        $leader = User::find(auth()->user()->leader_id);
        return view('pages.profile')->with('leader', $leader);
    }
}
