<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'shop_id',];

    public static $rules = array(
        'user_id' => 'required|numeric',
        'shop_id' => 'required|numeric',
    );

    public function shop() 
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
