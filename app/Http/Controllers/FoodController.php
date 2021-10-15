<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Comment;
use App\Models\User;
use League\CommonMark\Extension\Table\Table;


class FoodController extends Controller
{
    public function index()
    {
        
        $foods = Food::all();

        return view('foods.index')->with('foods', $foods);
    }   

    public function create()
    {
            
        return view('foods.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
            'food_name'=>'required',
            'food_body_ingredient'=>'required',
            'food_body_steps'=>'required',
            'food_img'=>'required',
        ]);
    
        Food::create($request->all());
    
        return redirect()->route('food.index');
    }

    // Table::select('name','surname')->where('id', 1)->get();

    public function show($id)
    {   
        $comments = Comment::all();
        $users = User::all();
        $food = Food::find($id);
  
        return view('foods.show')->with('food',$food)->with('comments', $comments)->with('users', $users);
    }



}
