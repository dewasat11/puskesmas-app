<?php

namespace App\Controllers\Pasien;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PasienController extends BaseController
{
    public function index()
    {
    return view('Admin/Pasien/v_pasien');
    }
}
