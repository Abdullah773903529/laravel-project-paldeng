<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CummntController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\EnsureAuthanticat;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('buildings.create');
// });

// Route::get('/',[TestController::class,'index']);
 Route::get('/',[TestController::class,'index'])->name('posts.index');

Route::get('/register',[AuthController::class,'showeregister'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('regis'); 

Route::get('/login',[AuthController::class,'showelogin'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::post('/log',[AuthController::class,'login'])->name('log');

Route::middleware([EnsureAuthanticat::class])->group(function (){

    Route::get('/building/create',[BuildingController::class,'create'])->name('buildings.create');
    Route::post('/building',[BuildingController::class,'store'])->name('buildings.store');
    Route::get('building/{building}/edit',[BuildingController::class,'edit'])->name('buildings.edit');
    Route::put('building/{building}',[BuildingController::class,'update'])->name('buildings.update');
    Route::delete('building/{building}',[BuildingController::class,'destroy'])->name('buildings.destroy');

    Route::get('/builds/create',[BuildController::class,'create'])->name('builds.creat');
    Route::post('/builds',[BuildController::class,'store'])->name('builds.store');
    Route::get('builds/{builds}/edit',[BuildController::class,'edit'])->name('builds.edit');
    Route::delete('builds/{builds}',[BuildController::class,'destroy'])->name('builds.destroy');
    Route::put('builds/{builds}',[BuildController::class,'update'])->name('builds.update');
    
    Route::post('/customer',[CustomerController::class,'store'])->name('customer.store');
    Route::delete('customer/{customer}',[CustomerController::class,'destroy'])->name('customer.destroy');
    
    Route::get('/section/create',[SectionController::class,'create'])->name('sections.create');
    Route::post('/section',[SectionController::class,'store'])->name('section.store');
    Route::delete('section/{section}',[SectionController::class,'destroy'])->name('sections.destroy');

    Route::get('/manager/create',[ManagerController::class,'create'])->name('manager.create');
    Route::post('/manager',[ManagerController::class,'store'])->name('manager.store');
    
    

});    

// this is the controller for the buildings


Route::get('/building/{building}',[BuildingController::class,'showe'])->name('buildings.showe');




// this is the controller for the build

Route::get('/builds/{builds}',[BuildController::class,'showe'])->name('builds.showe');





// // this is the controller for the cumments
Route::get('/cumments/create',[CummntController::class,'create'])->name('cumments.creat');

Route::post('/cumments',[CummntController::class,'store'])->name('cumments.store');

// Route::get('/cumments/{cumments}',[BuildController::class,'showe'])->name('cumments.showe');

// Route::get('cumments/{cumments}/edit',[BuildController::class,'edit'])->name('cumments.edit');

// Route::put('cumments/{cumments}',[BuildController::class,'update'])->name('cumments.update');

// Route::delete('cumments/{cumments}',[BuildController::class,'destroy'])->name('cumments.destroy');




// this is the controller for the customer
// Route::get('/customer/create',[BuildController::class,'create'])->name('customer.creat');


// Route::get('/customer/{customer}',[BuildController::class,'showe'])->name('customer.showe');

// Route::get('customer/{customer}/edit',[BuildController::class,'edit'])->name('customer.edit');

// Route::put('customer/{customer}',[BuildController::class,'update'])->name('customer.update');




// this is the controller for the section


 Route::get('/section/{section}',[SectionController::class,'showe'])->name('sections.showe');

// Route::get('customer/{customer}/edit',[SectionController::class,'edit'])->name('customers.edit');

// Route::put('customer/{customer}',[SectionController::class,'update'])->name('customers.update');
