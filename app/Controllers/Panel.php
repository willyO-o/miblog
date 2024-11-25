<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Panel extends BaseController
{
    public function index()
    {
        return view('admin/tablero');
    }
}
