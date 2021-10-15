<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Comments_Drink extends Model
{
    use SoftDeletes;
   
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id', 'drink_id', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comments_Drink::class, 'parent_id');
    }
}
