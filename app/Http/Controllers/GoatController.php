<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use Illuminate\Http\Request;

class GoatController extends Controller
{
    public function index()
    {
        $goats = Goat::all();
        return view('goats.index', compact('goats'));
    }

    public function show(Goat $goat)
    {
        return view('goats.show', compact('goat'));
    }

    public function create()
    {
        return view('goats.create');
    }

    public function store()
    {
        // Valider les données
        request()->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday' => 'required|date|before:'.date('Y-m-d'),
        ]);

        $g = new Goat();
        $g->price = request()->price;
        $g->name = request()->name;
        $g->sex = request()->sex == 'on' ? true : false;
        $g->color = request()->color;
        $g->birthday = request()->birthday;
        $g->save();
        return redirect('/goats/'.$g->id);
    }

    public function edit(Goat $goat) {
        return view('goats.edit', compact('goat'));
    }

    public function update(Goat $goat) {
        // Valider les données
        request()->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday' => 'required|date|before:'.date('Y-m-d'),
        ]);

        $goat->price = request()->price;
        $goat->name = request()->name;
        $goat->sex = request()->sex == 'on' ? true : false;
        $goat->color = request()->color;
        $goat->birthday = request()->birthday;
        $goat->save();
        return redirect('/goats/'.$goat->id);
    }

    public function destroy(Goat $goat)
    {
        $goat->delete();
        return redirect('/goats');
    }
}
