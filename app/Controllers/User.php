<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController {

    public function __construct() {
        
    }

    public function profil() {
        $session = session();
        $session->get('user_name');
    }

    public function tout_les_utilisateurs() {
        $session = session();
        $user = new UserModel();
        $data = [
          'users' => $user->getName(),  
        ];

        return view('user/ListeUtilisateur', $data);
    }

}
