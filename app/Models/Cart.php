<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function goats()
    {
        return $this->belongsToMany(Goat::class, CartGoat::class)->withPivot(["quantity"]);
    }
}
