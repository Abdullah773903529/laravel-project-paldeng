<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function store()
    {
      request()->validate([
        'name'=>['required','min:3'],
        'job'=>['required'], 
        'phone'=>['required'],
        'user'=>['required','exists:users,id'],

      ]);
   
        $name = request()->name;//this con from users from framework
        $job = request()->job; 
        $phone= request()->phone;
        $user = request()->user;
      
      $post = new Customer();
      $post->create([
        'name'=>$name,
        'job'=>$job,
        'phone'=>$phone,
        'user_id'=>$user
      ]);
    //   $post->save();
        return to_route('buildings.create');
    }



    public function destroy($postId)
    {
        Customer::where('id',$postId)->delete();
        return to_route('posts.index');
    }
}
