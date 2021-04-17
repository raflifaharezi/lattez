<?php

namespace App\Http\Controllers\Lattez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\district;

class OrdersController extends Controller
{
    public function index() {
        $provinces = Province::pluck('name', 'id');

        return view('pages.orders', [
            'provinces' => $provinces,
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
        // dd($request->all());

        return response()->json($district);
    }
}
