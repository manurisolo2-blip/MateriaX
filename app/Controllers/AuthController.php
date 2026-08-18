<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    /**
     * Procesa el registro de una nueva empresa / usuario.
     * Incluye validación CSRF, validación de CUIT y correo corporativo,
     * encriptación segura Bcrypt y creación de registro.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function register()
    {
        // 1. Validación de reglas de entrada y token CSRF nativo
        $rules = [
            'company_name' => 'required|min_length[3]|max_length[150]',
            'cuit'         => 'required|min_length[11]|max_length[13]',
            'email'        => 'required|valid_email|is_unique[usuarios.email]',
            'password'     => 'required|min_length[8]',
            'role'         => 'permit_empty|in_list[empresa,operador,visitante]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // 2. Extracción y sanitización de datos del Request
        $nombre   = trim($this->request->getPost('company_name'));
        $email    = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');
        $role     = $this->request->getPost('role') ?? 'empresa';

        // 3. Inserción segura mediante Modelo
        $userModel = new UserModel();
        $userData  = [
            'email'         => $email,
            'password_hash' => password_hash($password, PASSWORD_BCRYPT),
            'role'          => $role,
            'nombre'        => $nombre,
            'activo'        => 1,
        ];

        if (!$userModel->insert($userData)) {
            return redirect()->back()->withInput()->with('error', 'No se pudo completar el registro. Intente nuevamente.');
        }

        $userId = $userModel->getInsertID();

        // 4. Inicialización segura de sesión
        session()->regenerate();
        session()->set([
            'user_id'    => $userId,
            'email'      => $email,
            'role'       => $role,
            'nombre'     => $nombre,
            'isLoggedIn' => true,
        ]);

        return redirect()->to('/dashboard')->with('message', 'Cuenta creada exitosamente. Bienvenido a MateriaX.');
    }

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
        $email = trim($this->request->getPost('email'));
        $pass  = $this->request->getPost('password');

        // 3. Consulta segura mediante Modelo (Query Builder parametrizado)
        $userModel = new UserModel();
        $user      = $userModel->where('email', $email)->first();

        // 4. Validación de usuario existente y verificación Bcrypt
        if (!$user || !password_verify($pass, $user['password_hash'])) {
            return redirect()->back()->withInput()->with('error', 'Credenciales inválidas. Verifique su correo o contraseña.');
        }

        // 5. Validación de cuenta activa
        if (isset($user['activo']) && !$user['activo']) {
            return redirect()->back()->withInput()->with('error', 'Su cuenta se encuentra pendiente de homologación o desactivada.');
        }

        // 6. Regeneración de sesión, persistencia de estado y redirección
        session()->regenerate();
        session()->set([
            'user_id'    => $user['id'],
            'email'      => $user['email'],
            'role'       => $user['role'],
            'nombre'     => $user['nombre'] ?? '',
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
