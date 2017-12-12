<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function update($id, UserRequest $request)
    {
        DB::transaction(function () use ($id, $request) {
            $user = User::find($id);
            $user->update($request->all());
        });

        return redirect('profile')->with('message', 'Dados alterados com sucesso.');
    }

    public function changePassword($id, ChangePasswordRequest $request)
    {
        DB::transaction(function () use ($id, $request) {
            $user = User::find($id);
            $user->password = bcrypt($request->get('password'));
            $user->save();
        });

        return redirect('change-password')->with('message', 'Senha alterada com sucesso.');
    }
}
