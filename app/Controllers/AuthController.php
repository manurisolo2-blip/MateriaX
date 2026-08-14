<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    /**
     * Procesa la autenticación de usuarios de forma segura.
     * Incluye validación CSRF, Query Builder con protección SQL Injection,
     * verificación Bcrypt y manejo robusto de sesión y redirecciones.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function login()
    {
        // 1. Validación de reglas de entrada y token CSRF nativo
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // 2. Extracción segura de datos del Request
        $email = $this->request->getPost('email');
        $pass  = $this->request->getPost('password');

        // 3. Consulta segura mediante Modelo (Query Builder parametrizado)
        $userModel = new UserModel();
        $user      = $userModel->where('email', $email)->first();

        // 4. Validación de usuario existente y verificación Bcrypt
        if (!$user || !password_verify($pass, $user['password_hash'])) {
            return redirect()->back()->withInput()->with('error', 'Credenciales inválidas. Verifique su correo o contraseña.');
        }

        // 5. Regeneración de sesión, persistencia de estado y redirección
        session()->regenerate();
        session()->set([
            'user_id'    => $user['id'],
            'email'      => $user['email'],
            'role'       => $user['role'],
            'isLoggedIn' => true,
        ]);

        return redirect()->to('/dashboard');
    }

    /**
     * Cierra la sesión activa del usuario de forma segura.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('message', 'Sesión finalizada exitosamente.');
    }
}
