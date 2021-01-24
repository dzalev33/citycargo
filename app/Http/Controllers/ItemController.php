<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function index()
//    {
//        $items = Item::latest()->with(['client'])->paginate(20);
//        return view('clients.index',[
//            'items' => $items
//        ]);
//    }
}
