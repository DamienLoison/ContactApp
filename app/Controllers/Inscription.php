<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Inscription extends Controller {

    public function __construct() {
        helper('form');
    }

    public function index() {
        $data = [];
        $data['validation'] = null;
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'nom' => 'min_length[2]|max_length[50]',
                'email' => 'required|valid_email|is_unique[user.email]',
                'password' => 'required|min_length[4]|max_length[50]',
                'confpassword' => 'matches[password]'
            ];
            if ($this->validate($rules)) {
                echo 'Donnée enregistrer';
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('user/Inscription', $data);
    }

}
