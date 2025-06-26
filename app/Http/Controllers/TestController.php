<?php

namespace App\Http\Controllers;

use App\Models\build;
use App\Models\Building;
use App\Models\Cummnt;
use App\Models\Manager;
use App\Models\Section;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $section = Section::all();
        $building = build::all();
        $manager = Manager::all();
        $sectionmanager = Manager::with('manager');
        $cumment = Cummnt::all();
        return view('posts.index',['section'=>$section,'build'=>$building,'manager'=>$manager,'sectionmanager'=>$sectionmanager,'cumment'=>$cumment]);
    }
}
