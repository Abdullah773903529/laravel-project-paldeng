<?php

namespace App\Http\Controllers;

use App\Models\Cummnt;
use App\Models\Customer;
use Illuminate\Http\Request;

class CummntController extends Controller
{
    //
    public function create()
    {
        $customer = Customer::all();
        return view('cumments.create',['customer'=>$customer]);
    }

    public function store()
    {
        request()->validate([
            'describtion'=>['required','min:3'],
            'customer_id'=>['required'], 
            'img'=>['required'],
          ]);
          $describtion = request()->describtion;
          $customer_id = request()->customer_id;
          $img = request()->img;

          $cummint = new Cummnt();

          $cummint->create([
            'describtion'=>$describtion,
            'customer_id'=>$customer_id,
            'img'=>$img
          ]);
          return to_route('posts.index');
    }
}
