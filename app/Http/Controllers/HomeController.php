<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';

        return view('home', ['pageTitle' => $pageTitle]);
    }
}
