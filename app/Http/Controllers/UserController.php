<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function get(Request $request){
        // $user = User::where('username', $request->get('username'))->get();
        $user = 'test';
        return response()->json($user);
    }
}
