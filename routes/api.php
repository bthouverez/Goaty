<?php

use App\Models\Goat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goats', function() {
    return Goat::all();
});


Route::get('/goats/{id}', function($id) {
    return Goat::find($id);
});


Route::post('/goats', function() {
    $validator = Validator::make(request()->all(), [
        'price' => 'required|integer',
        'name' => 'required|min:5|max:25',
        'color' => 'required',
        'birthday' => 'required|date|before:'.date('Y-m-d'),
    ]);

    if($validator->fails()) {
        return response()->json([
            'message' => $validator->messages(),
        ], 422);
    }

    $g = new Goat();
    $g->price = request()->price;
    $g->name = request()->name;
    $g->sex = request()->sex == 'on' ? true : false;
    $g->color = request()->color;
    $g->birthday = request()->birthday;
    $g->user_id = request()->user_id;
    $g->save();

    return response()->json([
        'message' => 'Goat created'
    ], 201);
});



