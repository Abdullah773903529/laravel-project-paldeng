<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //

    public function create()
    {
        return view('managers.create');
    }

    public function store()
    {
        request()->validate([
            'name'=>['required','min:3'],
            'job'=>['required'], 
            'img'=>['required'],
          ]);
          $name = request()->name;
          $job = request()->job;
          $img = request()->img;

          $manag = new Manager();
          $manag->create([
            'name'=>$name,
            'job'=>$job,
            'img'=>$img
          ]);

        return to_route('posts.index');
    }

    public function destroy()
    {
        return to_route('posts.index');
    }
}
