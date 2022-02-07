<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InformationController extends Controller
{
    public function index(){
        helper(['Information', 'url']);
        echo view('Information');
    }
}