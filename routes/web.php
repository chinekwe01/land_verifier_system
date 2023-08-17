<?php

use App\Http\Controllers\HomeController;
use App\Models\Registered_Land;
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

Route::get('/home', [App\Http\Controllers\RegisteredLandController::class, 'index'])->name('home');
