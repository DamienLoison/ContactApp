<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController {

    public function __construct() {
//        helper();
    }

    public function profil() {
        $session = session();

        echo view('template/header');
        echo view('user/Profil');
        echo view('template/footer');
    }

}
