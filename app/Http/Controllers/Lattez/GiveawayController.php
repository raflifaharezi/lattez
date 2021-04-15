<?php

namespace App\Http\Controllers\Lattez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiveawayController extends Controller
{
    public function index() {
        return view('pages.giveaway');
    }
}
