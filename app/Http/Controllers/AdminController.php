<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $users;
    public function __construct(User $users)
    {
        $this->users=$users;
    }
    public function showlogin()
    {
        if(auth()->check()){
            return redirect()->to("home");
        }    
        return view("login");
    }
    public function createUser()
    {
        return view("setting.user.create-user");
    }
    public function storeUser(Request $request)
    {
        $this->users->create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=>$request->password
            ]);
        return redirect()->route('setting.index')->with('success','');
    }
    public function login(Request $request)
    {
        $remember=$request->has('remeber_me') ? true:false;
        if(auth()->attempt([
          'email'=>$request->email,
          'password'=>$request->password
        ], $remember)) {
            return redirect()->route('procedure.index')->with('success','');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return view("login");
    }

}
