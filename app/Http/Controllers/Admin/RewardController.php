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
        // dd($request->all());
        if($request->hasFile('img_path')){
            $reward = $request->file('img_path');
            $reimage = time().'.'.$reward->getClientOriginalExtension();
            $dest = public_path('/img/reward');
            $reward->move($dest, $reimage);

        }

        $reward = new Reward();

        $reward->name = $request->name;
        $reward->reward_quantity = $request->reward_quantity;
        $reward->sales = $request->sales;
        $reward->img_path = $reimage;
        //  $reward['img_path'] = $request->file('img_path')->store('/images', 'public');
        $reward->package_id = $request->package_id;

        $reward->save();

        return redirect()->back()->with('add_success', 'Data Berhasil ditambahkan');

    }

    public function update(Request $request){
        // dd($request->all());
        if($request->hasFile('img_path')){
            $reward = $request->file('img_path');
            $reimage = time().'.'.$reward->getClientOriginalExtension();
            $dest = public_path('/img/reward');
            $reward->move($dest, $reimage);
            // dd($reimage);

        }
        // return $reimage;
        $name = Reward::where('id', $request->id)->first();
        // dd($name);
        // dd($request->all());
        // $goods = Goods::find($name->id);
        // $name = Reward::first();
        // dd($name);
        $rewards = Reward::find($name->id);
        // dd($rewards);
        $rewards->name = $request->name;
        $rewards->sales = $request->sales;
        $rewards->reward_quantity = $request->reward_quantity;
        $rewards->img_path = $reimage;
        $rewards->package_id = $request->package_id;

        $rewards->update();

        return redirect()->back()->with('edit_success', 'Data Berhasil diedit');
        // $rewards = Reward::find($name->id);
        // dd($rewards);
    }


    public function delete($id){
        
        $rewards = Reward::find($id);
        // dd($rewards);
    
        $rewards->delete();
        return redirect()->back()->with('delete_success', 'Data berhasil dihapus');
}
}
