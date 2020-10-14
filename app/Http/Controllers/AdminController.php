<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Gate::allows('admin')){
            return response()->json([
                'message' => 'Admin Interface',
            ]);
        }
        return redirect()->route('welcome');
    }

    public function update(User $user, $role, $order)
    {
        return ($order)
            ? $user->roles()->attach($role)
            : $user->roles()->detach($role);
    }

    public function test() {
        dd(auth()->user()->roles());
    }
}
