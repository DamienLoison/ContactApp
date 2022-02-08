<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ajout_organisationController extends Controller
{
    public function index(){
        helper(['ajout-organisation', 'url']);
        echo view('Accueil');
    }
}
