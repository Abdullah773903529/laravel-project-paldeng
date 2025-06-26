<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function showeregister()
    {
        return view('auth.register');
    }

    public function showelogin()
    {
        return view('auth.login');
    }

    public function register()
    {
       $data = request()->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'password'=>'required|min:6',
           
        ]);

        $data['password'] = Hash::make( $data['password'] );

        $user = User::create($data);

        session(['user_id',$user->id]);
        return to_route('posts.index');
    }
    public function logout()
    {
        session()->forget('user_id');

        return to_route('posts.index');

    }

    public function login()
    {
       $data = request()->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        $user = User::where('email',$data['email'])->first();
        if(!$user || !Hash::check($data['password'],$user->password)){
        return back()->withErrors(
             [
                'email'=>'not found',
            ]
        );
        }
        session(['user_id'=>$user->id]);
        return to_route('posts.index');
        
    }
}

