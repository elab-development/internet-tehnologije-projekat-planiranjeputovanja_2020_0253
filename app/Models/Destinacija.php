<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinacija extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country', 'description'];

    // Definiši relaciju sa znamenitostima ako postoji
    public function znamenitosti()
    {
        return $this->hasMany(Znamenitost::class); // Primer ako postoji relacija hasMany
    }

    // Definiši relaciju sa planovima putovanja ako postoji
    public function planoviPutovanja()
    {
        return $this->hasOne(PlanPutovanja::class); // Primer ako postoji relacija hasOne
    }
}
