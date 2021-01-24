<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('clients.index');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'username' => 'required|max:255',
        ]);

        Client::create([
            'name' => $request->name,
            'username' => $request->username,
        ]);

//        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }


}
