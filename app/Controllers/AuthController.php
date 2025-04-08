<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class AuthController extends Controller {
    
    public function register() {
        return view('register');
    }

    public function create() {
        $model = new UsuarioModel();
        
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'correo' => $this->request->getPost('correo'),
            'contraseña' => password_hash($this->request->getPost('contraseña'), PASSWORD_DEFAULT),
        ];

        if ($model->save($data)) {
            return redirect()->to('/login')->with('success', 'Usuario registrado con éxito');
        } else {
            return redirect()->to('/register')->with('fail', 'Error al registrar el usuario');
        }
    }

    public function login() {
        return view('login');
    }

    public function authenticate() {
        $model = new UsuarioModel();
        $correo = $this->request->getPost('correo');
        $contraseña = $this->request->getPost('contraseña');
        
        $usuario = $model->where('correo', $correo)->first();

        if (!$usuario) {
            return redirect()->to('/login')->with('fail', 'El usuario no está registrado');
        }

        if (password_verify($contraseña, $usuario['contraseña'])) {
            session()->set('loggedUser', $usuario['id']);
            session()->set('userName', $usuario['nombre']);
            return redirect()->to('/PagPrincipal');
        } else {
            return redirect()->to('/login')->with('fail', 'Contraseña incorrecta');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Sesión cerrada con éxito');
    }

    public function PagPrincipal() {
        return view('PagPrincipal');
    }
}