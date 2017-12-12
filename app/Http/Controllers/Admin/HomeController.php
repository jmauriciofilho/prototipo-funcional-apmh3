<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $countUsers = User::count();
        return view('admin.dashboard.home', compact('user', 'countUsers'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.tables.usersTable', ['users' => $users]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.forms.profile', ['user' => $user]);
    }

    public function changePassword()
    {
        $user = Auth::user();
        return view('auth.passwords.change-password', ['user' => $user]);
    }
}
