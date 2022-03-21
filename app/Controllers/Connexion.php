<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Connexion extends Controller {

    public function __construct() {
        helper('form');
    }

    public function index() {
        helper(['form']);
        echo view('user/Connexion');
    }

}
