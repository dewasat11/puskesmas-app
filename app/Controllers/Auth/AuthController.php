<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User\UserModel;

class AuthController extends BaseController
{

    protected $userModel;

    public function __construct() {
        $this->userModel = new \App\Models\User\UserModel();
    }
    
    public function index()
    {
        return view('Auth/v_login');
    }

    public function login()
    {
        return view('Auth/v_login');
    }

    public function register()
    {
        return view('Auth/v_register');
    }

    public function loginProses()
    {
        // Validasi form login
        $validation = \Config\Services::validation();
        $validationRules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            // Jika validasi gagal, kembalikan ke halaman login dengan pesan error
            return view('Auth/v_login', ['validation' => $validation]);
        }

        // Ambil input username dan password dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $this->userModel->where('username', $username)->first();

        if ($user) {
            // Jika user ditemukan, verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika password benar, login berhasil
                // Set session atau token auth sesuai kebutuhan
                // Redirect ke halaman dashboard atau halaman setelah login sukses
                return redirect()->to('/dashboard');
                // Contoh: set session user_id
                session()->set('user_id', $user['id']);
                // Set session role
                session()->set('role', $user['roles']);
            } else {
                // Jika password salah, kembalikan ke halaman login dengan pesan error
                return view('Auth/v_login', ['validation' => $validation, 'error' => 'Password salah']);
            }
        } else {
            // Jika user tidak ditemukan, kembalikan ke halaman login dengan pesan error
            return view('Auth/v_login', ['validation' => $validation, 'error' => 'Username tidak ditemukan']);
        }
    
    }
}