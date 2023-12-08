<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __invoke()
    {

        foreach (Auth::user()->carts->first()->goats as $goat) {
            echo $goat->name.' '.$goat->price.' ('.$goat->pivot->quantity.')';
        }

    }
}
