<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            [
                'text_username' => ['required', 'email'],
                'text_password' => ['required', 'min:6', 'max:16'],
            ],
            [
                'text_username.required' => 'O username é obrigatório',
                'text_username.email' => 'O username deve ser um email válido',
                'text_password.required' => 'A password é obrigatória',
                'text_password.min' => 'A password deve ter pelo menos :min caracteres',
                'text_password.max' => 'A password deve ter no máximo :max caracteres',
            ]
        );

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        $user = User::where('username', $username)
            ->where('deleted_at', NULL)
            ->first();

        if (!$user || !password_verify($password, $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Username ou password incorretos');
        }

        // update last login
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'username' => $user->username,
            ]
        ]);

        print_r('LOGIN PAPAI');
    }

    public function logout()
    {
        echo 'logout';
    }

}
