<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstadoModel;

class Estado extends BaseController
{
    private $estadoModel;

    public function __construct()
    {
        $this->estadoModel = new EstadoModel();
    }

    public function index()
    {
        // return view('estados');
        return view('estados', [
            'estados' => $this->estadoModel->findAll()
        ]);
    }
}
