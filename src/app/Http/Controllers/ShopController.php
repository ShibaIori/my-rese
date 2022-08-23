<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\User;
use App\Models\Area;
use App\Models\Genre;


class ShopController extends Controller
{
    public function index() 
    {
        $items = Shop::all();
        $areas = Area::all();
        $genres = Genre::all();

        $data = [
            'items' => $items,
            'areas' => $areas,
            'genres' => $genres,
        ];
        
        return view('index', $data);
    }

    public function detail(Shop $shop)
    {
        return view('detail', [ 'item' => $shop ]);
    }

    public function mypage()
    {
        $user = User::where('id', Auth::id())->first();
        
        return view('mypage', [ 'item' => $user ]);
    }
}
