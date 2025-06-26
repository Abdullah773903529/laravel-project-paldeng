<?php

namespace App\Http\Controllers;

use App\Models\build;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    //
    public function create()
    {
      $user = User::all();
      $section = Section::all();
    
        return view('builds.create',['user'=>$user,'section'=>$section]);
    }

    public function showe(build $builds)
    {
        return view('builds.showe',['build'=>$builds]); 
    }

    public function edit(build $builds)//select * from jobs
    {
      // dd($builds);
        return view('builds.edit',['build'=>$builds]);
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
        'user'=>['required','exists:users,id'],

      ]);
      //  $request= request()->all(); 
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
        $user = request()->user;
     
      $post = new build();
  
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
        'user_id'=>$user
      ]);
  
        return to_route('posts.index');

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
      $user = request()->user;

      $post = build::find($postid);
     

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
        'user_id'=>$user
      ]);
        return to_route('builds.showe',$post->id);
    }

    public function destroy($postId)
    {
        build::where('id',$postId)->delete();
        return to_route('posts.index');
    }

}
