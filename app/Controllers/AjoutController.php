<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AjoutController extends Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
    public function index(){
        helper(['Ajout', 'url']);
        echo view('Ajout');
    }
    public function ajout_Contact(){

    }
    public function ajout_Organisation(){
        
    }
    public function ajout_Login(){
        
    }
}
