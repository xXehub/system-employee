<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{

    public function __invoke(Request $request)
    {
        $pageTitle = 'Profile';

        return view('auth.profile', ['pageTitle' => $pageTitle]);
    }

    // added by sihub
    
}
