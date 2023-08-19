<?php

use App\Http\Controllers\HomeController;
use App\Models\Registered_Land;
use App\Models\Unregistered_Land;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    // Check for search input
    if (request('search')) {
        $registered_Land = Registered_Land::where('beacon', 'like', '%' . request('search') . '%')->get();
    }
    else {
        $registered_Land = Registered_Land::all();
    }

    return view('search', compact('registered_Land'));
});

Auth::routes();

// Registered Land routes
Route::get('/home', [App\Http\Controllers\RegisteredLandController::class, 'index'])->name('home');
Route::get('/surveyor/register-land', [App\Http\Controllers\RegisteredLandController::class, 'create'])->name('surveyor.register-land');
Route::post('/surveyor/register-land/store', [App\Http\Controllers\RegisteredLandController::class, 'store'])->name('surveyor.register-land.store');

// Unregistered Land routes
Route::get('/unregistered-land/home', function(){
    // Check for search input
    if (request('search')) {
        $unregistered_Land = Unregistered_Land::where('owner_name', 'like', '%' . request('search') . '%')->get();
    }
    else {
        $unregistered_Land = Unregistered_Land::all();
    }

    return view('unregistered.home', compact('unregistered_Land'));
});
