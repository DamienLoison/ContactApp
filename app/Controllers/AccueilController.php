<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AccueilController extends Controller
{
    public function index(){
        helper(['Accueil', 'url']);
        echo view('Accueil');
    }
}
