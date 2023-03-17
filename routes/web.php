<?php

use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::prefix('dashboard')->middleware('auth')->group(function () {
   
       
    Route::get('rents', function () {
        $homes = Home::all();
        return view('back.index', ['title' => 'Mes réservations'],compact('homes'));
    })->name('rents');
    Route::get('payments', function () {
        return view('back.index', ['title' => 'Mes paiements']);
    })->name('payments');
});
Route::post('/create',[HomeController::class, 'store'])->name('create');

require __DIR__.'/auth.php';
