<?php

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

// Index : voir tous les goats
Route::get('/goats', function() {
    $goats = [
        ['id' => 0, 'nom' => 'Boby', 'prix' => 50 ],
        ['id' => 1, 'nom' => 'Bobo', 'prix' => 150 ],
        ['id' => 2, 'nom' => 'Boba', 'prix' => 250 ],
        ['id' => 3, 'nom' => 'Bobu', 'prix' => 15250 ],
    ];
    return view('goats.index', compact('goats'));
});

Route::post('/goats', function() {
   dd('POST goat');
});

Route::get('/goats/create', function() {
    return view('goats.create');
});

// Show : afficher 1 seul goat
Route::get('/goats/{id}', function($id) {
    $goats = [
        ['id' => 0, 'nom' => 'Boby', 'prix' => 50 ],
        ['id' => 1, 'nom' => 'Bobo', 'prix' => 150 ],
        ['id' => 2, 'nom' => 'Boba', 'prix' => 250 ],
        ['id' => 3, 'nom' => 'Bobu', 'prix' => 15250 ],
    ];
    $goat = $goats[$id];
    return view('goats.show', compact('goat'));
});

