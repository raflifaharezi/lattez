<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Package;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('Package')->paginate(5);
        // dd($user);
        return view('pages.admin.users', [
            'user' => $user
        ]);
    }
}
