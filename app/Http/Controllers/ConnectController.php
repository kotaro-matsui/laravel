<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function login(Request $request)
    {
        $users = DB::select('select * from user_table');
        return view('php.user', ['users' => $users]);
    }
    //
}