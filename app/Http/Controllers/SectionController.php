<?php

namespace App\Http\Controllers;

use App\Models\build;
use App\Models\Manager;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
// public function index()
// {
//     $poat = Section::all();
//      return view('posts.index',['posts'=>$poat]);
// }

public function create()
{
    $manager = Manager::all();
    return view('sections.create',['manager'=>$manager]);
}

public function showe(Section $section)
{
  //  build::where('section_id' ,$section->id)->get();
    // $data = build::where('section_id' ,$section->id)->get();
    // dd($data);
    // return view('sections.showe',['section'=>$section,'data'=>$data]);
    
    // If you want to get all builds related to the section
// ....   // $data = build::where('section_id' ,$section->id)->get();
    // dd($data);
    // return view('sections.showe',['section'=>$section,'data'=>$data]);
    
    // If you want to get all builds related to the section
    $data = build::where('section_id' ,$section->id)->get();
    // dd($data);
    
    // If you want to get all builds related to the section

    return view('sections.showe',['section'=>$section,'data'=>$data]);
}



public function store()
{
  request()->validate([
    'title'=>['required','min:3'],
    'img'=>['required'], 
    'manager'=>['required','exists:users,id'],

  ]);

    $title = request()->title;//this con from users from framework
    $img = request()->img;//this con from users from framework
    $manager_id = request()->manager;

  $post = new Section();

  $post->create([
    'title'=>$title,
    'img'=>$img,
    'manager_id'=>$manager_id
  ]);

    return to_route('posts.index');

}

public function edit(Section $section)
{
    return view('sections.edit',['section'=>$section]);
}

public function update($sectionid)
{
  request()->validate([
    'title'=>['required','min:3'],
    'img'=>['required'], 
    'user'=>['required','exists:users,id'],

  ]);

    $title = request()->title;
    $img = request()->img;
    $manager_id = request()->coustomer;
    
    $singlsection = Section::find($sectionid);
    $singlsection->update([
      'title'=>$title,
      'img'=>$img,
      'manager_id'=>$manager_id
    ]);
  
    return to_route('posts.index',$singlsection->id);
}

public function destroy($postId)
{
    Section::where('id',$postId)->delete();
    return to_route('posts.index');
}





















}
