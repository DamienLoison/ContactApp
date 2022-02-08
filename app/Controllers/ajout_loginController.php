<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ajout_loginController extends Controller
{
    public function index(){
        helper(['Accueil', 'url']);
        echo view('ajout/ajout_login');
    }
}
