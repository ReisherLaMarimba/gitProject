<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function create(){
        $roles = Role::all()->pluck('name','id');
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request){
        
     $user =    User::create($request->only('name', 'email')
    +[
        'password' => bcrypt($request->input('password'))
]);
$roles = $request->input('roles', []); 
$user->syncRoles($roles);
        return redirect()->back();
    }
}
