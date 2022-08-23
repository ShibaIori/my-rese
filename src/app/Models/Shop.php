<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['area_id', 'genre_id', 'name', 'image', 'sentence'];

    public static $rules = array(
        'area_id' => 'required|numeric',
        'genre_id' => 'required|numeric',
        'name' => 'required|string',
        'image' => 'required|string',
        'sentence' => 'required|string',
    );

    public function area() 
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function genre() 
    {
        return $this->belongsTo('App\Models\Genre');
    }

    public function isFavorite()
    {
        return $this->hasOne('App\Models\Favorite')->where('user_id', Auth::id());
    }
}
