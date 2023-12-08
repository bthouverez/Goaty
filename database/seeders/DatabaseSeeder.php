<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cart;
use App\Models\CartGoat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $u = new User;
        $u->name = 'bthouverez';
        $u->email = 'bthouverez@bthouverez.fr';
        $u->password = Hash::make('bthouverez');
        $u->is_admin = true;
        $u->save();

        $u = new User;
        $u->name = 'mthouverez';
        $u->email = 'mthouverez@mthouverez.fr';
        $u->password = Hash::make('mthouverez');
        $u->is_admin = false;
        $u->save();

        $c = new Cart;
        $c->label = 'principal';
        $c->user_id = 1;
        $c->save();

        $cg = new CartGoat;
        $cg->cart_id = 1;
        $cg->goat_id = 1;
        $cg->quantity = 3;
        $cg->save();

        $cg = new CartGoat;
        $cg->cart_id = 1;
        $cg->goat_id = 7;
        $cg->quantity = 2;
        $cg->save();

        $this->call([
            GoatSeeder::class,
        ]);

    }
}
