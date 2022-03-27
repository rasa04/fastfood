<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use Exception;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function main()
    {
        $sushi = food::firstWhere('name', 'Spicy mussels');
        $kebab = food::firstWhere('name', 'Kebab cheese');
        $pizza = food::firstWhere('name', 'Mexican');
        $burger = food::firstWhere('name', 'Chefburger DeLux');
        $drinks = food::firstWhere('name', 'Coco-cola');
        return view('main', ['sushi'=>$sushi, 'kebab'=>$kebab, 'pizza'=>$pizza, 'burger'=>$burger, 'drinks'=>$drinks]);
    }
    public function profile()
    {
        return view('profile', ['title'=>'Profile', 'user'=>dd(Auth::user())]);
    }

    public function foods($type)
    {
        //$foods = food::all();
        //$foods = food::latest()->get();
        $foods = food::orderBy('price', 'desc')->where('type', $type)->get();
        $title = food::where('type', $type)->firstOrfail();
        return view('foods', ['title'=> $title->type,'foods'=>$foods]);
    }

    public function details($pr)
    {
        $food = food::firstWhere('name', $pr);
        if (!$food) return "<h1 style='text-align:center; user-select: none'>Oups... Doesn't exist.</h1>";
        else return view('details', ['title' => $food->name,'food' => $food]);
    }
}
