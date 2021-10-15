<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    
    protected $dates = ['deleted_at'];
    protected $fillable = ['drink_name', 'drink_body_ingredient', 'drink_body_steps', 'drink_img',];

    public function comments()
    {
        return $this->hasMany(Comments_Drink::class)->whereNull('parent_id');
    }
}
