<?php

use App\Http\Controllers\Dashbord\DashbordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.contant.homepage');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::middleware(['auth'])->prefix('/admin')->controller(DashbordController::class)->name('dashbord')->group(function(){

    Route::get('/dashboard',[DashbordController::class,'dashboard'])->name('admin');







});



