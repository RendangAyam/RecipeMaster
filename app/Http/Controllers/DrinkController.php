<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\Comments_Drink;
use App\Models\User;

class DrinkController extends Controller
{
    public function index()
    {
        $drinks['drinks'] = Drink::all();
    
        return view('drinks.index')->with('drinks', $drinks['drinks']);
    }

    public function create()
    {
        return view('drinks.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
            'drink_name'=>'required',
            'drink_body_ingredient'=>'required',
            'drink_body_steps'=>'required',
            'drink_img'=>'required',
        ]);
    
        Drink::create($request->all());
    
        return redirect()->route('drink.index');
    }

    public function show($id)
    {
        $comments = Comments_Drink::all();
        $users = User::all();
    	$drink = Drink::find($id);
        return view('drinks.show')->with('drink', $drink)->with('users', $users)->with('comments', $comments);
    }

    public function homepages()
    {
        $drink = Drink::all();
        return view('home')->with('drinks', $drink);
    }
}
