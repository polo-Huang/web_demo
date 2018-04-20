<?php

namespace App\Http\Controllers\Atelier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('atelier/user/index', ['users' => $users]);
    }
    public function details($user_id)
    {
        $user = User::find($user_id);
        if ($user == null) {
            return redirect()->back();
        }
        return view('atelier/user/details', ['user' => $user]);
    }
}
