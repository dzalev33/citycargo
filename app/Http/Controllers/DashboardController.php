<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){

        $users = User::paginate(20);
        return view('dashboard', [
            'users' => $users,


        ]);
    }
}
