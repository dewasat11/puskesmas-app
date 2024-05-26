<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
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
}
