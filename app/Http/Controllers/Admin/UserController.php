<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Str;
use App\Package;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('Package')->paginate(10);
        // dd($user);
        return view('pages.admin.users', [
            'user' => $user
        ]);
    }

    public function create(Request $request)
    {   
        // dd($request->all());
        $role_admin = Role::where('slug','admin')->first();
        // dd($role_admin);
        $role_member = Role::where('slug','member')->first();

        $user = new User();
        $user->id = 'PRDCT'.date('YmdHis').strtoupper(Str::random(5));
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->leader_id = $request->leader_id;
        $user->no_rekening = $request->no_rekening;
        $user->no_ktp = $request->no_ktp;
        $user->password = bcrypt('lattez2021');
        $user->save();

        if($request->role == 'admin'){
            $user->roles()->attach($role_admin);
        }
        elseif($request->role == 'member'){
            $user->roles()->attach($role_member);
        }

        return redirect()->back()->with('add_success','data user berhasil ditambahkan');

    }

    public function delete($id){
        $users = User::find($id);
        dd($users);

        $users->delete();
        return redirect()->back()->with('delete_success', 'data user berhasil dihapus');
    }
}
