<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientItemController extends Controller
{
    public function index(Client $client){

        $items = $client->items()->with(['client'])->paginate(20);

        return view('clients.items.index', [
            'client' => $client,
            'items' => $items
        ]);
    }
}
