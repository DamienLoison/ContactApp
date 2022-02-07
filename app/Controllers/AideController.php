<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AideController extends Controller
{
    public function index()
    {
        helper(['Aide', 'url']);
        echo view('Aide');
    }
}
