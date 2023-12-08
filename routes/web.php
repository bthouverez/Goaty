<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GoatController;
use App\Http\Middleware\IsAdmin;
use App\Models\Goat;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::delete('/goats/{goat}', function(Goat $goat) {
    $goat->delete();
    return redirect('/goats');
});

Route::resource('goats', GoatController::class);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function () {
        return view('admin.admin-panel');
    })->name('administration')->middleware('is_admin');


    Route::get('/cart', CartController::class);

});



route::get('test', function() {
//    $s = User::with(['goats' => function ($query) {
//        return $query->select(['color']);
//    }])
    $s = User::with('goats:color')
    ->findOrFail(1);
    return $s;
});

Route::get('/test-livewire', function() {
    return view('counter-container');
});
