<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Inertia\Inertia; // Add this line to import the Inertia facade

class PizzaController extends Controller
{
    public function index()
    {
        // return Pizza::all();
        
        $pizzas = Pizza::all();

        return Inertia::render('Pizzas/All', [
            'pizzas' => $pizzas
        ]);
    }    
}
