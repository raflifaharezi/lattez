<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\district;
use Laravolt\Indonesia\Models\village;

class TransactionController extends Controller
{
    public function index ()
    {
        $provinces = Province::pluck('name', 'id');

        return view('pages.admin.transaction',[
            'provinces' => $provinces
        ]);
    }

    public function city(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))
            ->pluck('name', 'id');

        return response()->json($cities);
    }

    public function district(Request $request)
    {
        $district = district::where('city_id', $request->get('id'))
        ->pluck('name', 'id');

        return response()->json($district);
    }

    public function village(Request $request)
    {
        $village = village::where('district_id', $request->get('id'))
        ->pluck('name', 'id');

        return response()->json($village);
    }
}
