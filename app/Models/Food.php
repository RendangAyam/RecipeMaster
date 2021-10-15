<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $dates = ['deleted_at'];
    protected $fillable = ['food_name', 'food_body_ingredient', 'food_body_steps', 'food_img',];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
