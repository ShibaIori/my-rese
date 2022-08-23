<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReserveRequest;
use App\Models\Reserve;

class ReserveController extends Controller
{
    public function create(ReserveRequest $request)
    {
        $form = $request->all();
        Reserve::create($form);
        
        return view('done');
    }

    public function delete(Request $request)
    {
        Reserve::find($request->id)->delete();
        return back();
    }

    public function update(ReserveRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Reserve::where('id', $request->id)->update($form);

        return view('done');
    }
}
