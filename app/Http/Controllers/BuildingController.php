<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Customer;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    //

    public function create()
    {
      
        $user = User::all();
        $customer = Customer::all();
        $section = Section::all();

        return view('buildings.create',['user'=>$user,'customer'=>$customer,'section'=>$section]);
    }


  
    public function edit(Building $building)//select * from jobs
    {
        return view('buildings.edit',['building'=>$building]);
    }


    public function update($postid)
    {
      request()->validate([
        'title'=>['required','min:3'],
        'stryt'=>['required'], 
        'ceaty'=>['required'],
        'cuntrey'=>['required'], 
        'sqft'=>['required'],
        'room'=>['required'], 
        'bath'=>['required'],
        'price'=>['required'], 
        'stats'=>['required'],
        'img'=>['required'],
        'section'=>['required'],
        'section'=>['required','exists:sections,id'],
        'coustomer'=>['required','exists:customers,id'],
        'user'=>['required','exists:users,id'],

      ]);

      $title = request()->title;//this con from users from framework
      $stryt = request()->stryt; 
      $ceaty= request()->ceaty;
      $cuntrey = request()->cuntrey; 
      $sqft = request()->sqft;
      $room = request()->room; 
      $bath = request()->bath;
      $price = request()->price; 
      $stats = request()->stats;
      $img = request()->img;
      $section = request()->section;
      $coustomer = request()->coustomer;
      $user = request()->user;

      $post = Building::find($postid);

      $post->update([
        'title'=>$title,
        'stryt'=>$stryt,
        'ceaty'=>$ceaty,
        'cuntrey'=>$cuntrey,
        'sqft'=>$sqft,
        'room'=>$room,
        'bath'=>$bath,
        'price'=>$price,
        'stats'=>$stats,
        'img'=>$img,
        'section_id'=>$section,
        'customer_id	'=>$coustomer,
        'user_id'=>$user
      ]);
        return view('posts.index');
    }

    public function showe(Building $Building)
    {
       // dd($posts);
        return view('buildings.showe',['Building'=>$Building]);
    }

    public function store()
    {
      request()->validate([
        'title'=>['required','min:3'],
        'stryt'=>['required'], 
        'ceaty'=>['required'],
        'cuntrey'=>['required'], 
        'sqft'=>['required'],
        'room'=>['required'], 
        'bath'=>['required'],
        'price'=>['required'], 
        'stats'=>['required'],
        'img'=>['required'],
        'section'=>['required'],
        'section'=>['required','exists:sections,id'],
        'coustomer'=>['required','exists:customers,id'],
        'user'=>['required','exists:users,id'],

      ]);

        $title = request()->title;//this con from users from framework
        $stryt = request()->stryt; 
        $ceaty= request()->ceaty;
        $cuntrey = request()->cuntrey; 
        $sqft = request()->sqft;
        $room = request()->room; 
        $bath = request()->bath;
        $price = request()->price; 
        $stats = request()->stats;
        $img = request()->img;
        $section = request()->section;
        $coustomer = request()->coustomer;
        $user = request()->user;

      $post = new Building;

      $post->create([
        'title'=>$title,
        'stryt'=>$stryt,
        'ceaty'=>$ceaty,
        'cuntrey'=>$cuntrey,
        'sqft'=>$sqft,
        'room'=>$room,
        'bath'=>$bath,
        'price'=>$price,
        'stats'=>$stats,
        'img'=>$img,
        'section_id'=>$section,
        'customer_id'=>$coustomer,
        'user_id'=>$user
      ]);
    //   $post->save();
        return to_route('posts.index');

    }

    public function destroy($postId)
    {
        Building::where('id',$postId)->delete();
        return to_route('posts.index');
    }
}
