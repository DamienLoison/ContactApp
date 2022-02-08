<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ajout_contactController extends Controller
{
    public function index(){
        helper(['Accueil', 'url']);
        echo view('Accueil');
    }
}
