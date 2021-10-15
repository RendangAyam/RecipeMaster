<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comments_Drink;

class CommentsDrinkController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
            'user_id'=> 'required',
            'drink_id'=> 'required',
        ]);
 

        // $input = $request->all();
        // $input['user_id'] = auth()->user()->id;
    
        Comments_Drink::create($request->all());
   
        // return $request->input();
        return back();
    }

    public function destroy($id)
    {
        DB::delete('delete from comments__drinks where id = ?', [$id]);

        return back();
    }
}
