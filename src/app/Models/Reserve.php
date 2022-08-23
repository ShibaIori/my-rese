<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'shop_id', 'date', 'time', 'number'];

    public static $rules = array(
        'user_id' => 'required|numeric',
        'shop_id' => 'required|numeric',
        'date' => 'required|date_format:Y-m-d|after:tomorrow',
        'time' => 'required|date_format:H:i',
        'number' => 'required|numeric',
    );

    public function shop() 
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
