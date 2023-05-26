<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('users/login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Las credenciales son válidas, inicia sesión y redirige
            session()->set('isLoggedIn', true);
            return redirect()->to('users/pedir_cita');
        } else {
            // Las credenciales son inválidas, vuelve al formulario de inicio de sesión con un mensaje de error
            session()->setFlashdata('error', 'Credenciales inválidas. Inténtalo de nuevo.');
            return redirect()->to('users/login');
        }
    }
}

