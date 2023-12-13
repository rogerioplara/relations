<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $r)
    {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r)
    {
        // utilizar dessa forma é uma brecha de segurança, não será tratado neste momento
        $user = User::find($r->id);
        $user['addresses'] = $user->addresses;

        return $user;
    }

    public function insert(Request $r)
    {
        $data = $r->only(['name', 'email', 'password', 'address_id']);

        $user = User::create($data);

        return response()->json($user, 200);
    }
}
