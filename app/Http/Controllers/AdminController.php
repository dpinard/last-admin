<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return response()->json([
            'message' => 'Admin Interface',
        ]);
    }

    public function update(User $user, $role, $order)
    {
        return ($order)
            ? $user->roles()->attach($role)
            : $user->roles()->detach($role);
    }
}
