<?php

namespace App\Livewire;

use App\Models\Goat;
use Illuminate\Support\Collection;
use Livewire\Component;

class Counter extends Component
{
    public string $name;
    public int $price;
    public int $count;
    public Collection $goats;

    // Constructeur
    public function mount()
    {
        $this->username = 'John Doe';
        $this->count = 0;
        $this->goats = Goat::all()->sortByDesc('id');
    }

    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }

    public function add()
    {
        $g = new Goat();
        $g->name = $this->name;
        $g->price = $this->price;
        $g->color = 'darkorange';
        $g->birthday = '1990-07-31';
        $g->sex = 0;
        $g->user_id = 1;
        $g->save();
        $this->goats = Goat::all()->sortByDesc('id');
//        $this->goats->add($g)->sortByDesc('id');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
