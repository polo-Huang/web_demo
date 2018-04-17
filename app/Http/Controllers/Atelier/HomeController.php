<?php

namespace App\Http\Controllers\Atelier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('atelier/index');
    }
}
