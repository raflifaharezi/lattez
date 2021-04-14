<?php

namespace App\Http\Controllers\Lattez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonusStatementController extends Controller
{
    public function index(){
        return view('pages.bonus-statement');
    }
}
