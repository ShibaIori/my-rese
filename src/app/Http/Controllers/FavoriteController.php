<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function create(Request $request)
    {
        $form = $request->all();
        Favorite::create($form);
        return back();
    }

    public function delete(Request $request)
    {
        Favorite::where('user_id', Auth::id())->where('shop_id', $request->shop_id)->delete();
        return back();
    }
}
