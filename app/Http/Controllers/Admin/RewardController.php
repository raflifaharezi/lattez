<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reward;
use App\Package;
use Illuminate\Support\Str;

class RewardController extends Controller
{
    public function index()
    {
        $package = Package::all();
        $reward= Reward::with('Package')->paginate(5);
        return view('pages.admin.reward',[
            'reward' => $reward,
            'package' => $package
        ]);
    }

    public function create(Request $request){
        // if($request->hasFile('img_path')){
        //     $reward = $request->file('img_path');
        //     $reimage = time().'.'.$reward->getClientOriginalExtension();
        //     $dest = public_path('/img/reward');
        //     $reward->move($reimage, $dest);

        // }

        $reward = new Reward();

        $reward->name = $request->name;
        $reward->reward_quantity = $request->reward_quantity;
        $reward->sales = $request->sales;
        // $reward->img_path = $reimage;
         $reward['img_path'] = $request->file('img_path')->store('/img/product', 'public');
        $reward->package_id = $request->package_id;

        $reward->save();

        return redirect()->back()->with('add_success', 'Data Berhasil ditambahkan');

    }

//     public function delete($id){
//         $reward = Reward::find($id);
//         return $reward;

//         $reward->delete();
//         return redirect()->back()->with('delete_success', 'Data Berhasil dihapus');
//     }

public function delete($id){
    
    $rewards = Reward::find($id);
    dd($rewards);
   
    $rewards->delete();
    return redirect()->back()->with('delete_success', 'Data berhasil dihapus');
}
}
