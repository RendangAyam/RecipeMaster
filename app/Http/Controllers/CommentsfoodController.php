<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsfoodController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
            'user_id'=> 'required',
            'food_id'=> 'required',
        ]);
        

        // $input = $request->all();
        // $input['user_id'] = auth()->user()->id;
    
        Comment::create($request->all());
   
        return back();
    }
    public function destroy($id)
    {
        DB::delete('delete from comments where id = ?', [$id]);
        // echo 'asdf';
        return back();
    }
}
