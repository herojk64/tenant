<?php


use App\Http\Controllers\GlobalTenantController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('home');
});

Auth::routes();

Route::resource('dashboard', GlobalTenantController::class);
