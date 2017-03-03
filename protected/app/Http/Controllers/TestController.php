<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class TestController extends Controller
{
    //
    public function index(Request $request)
    {
        $items = Item::orderBy('id', 'DESC')->paginate(5);
        return view('ItemCRUD.index', compact('items'))
                ->with('i',($request->input('page', 1) - 1) * 5);
    }
}
