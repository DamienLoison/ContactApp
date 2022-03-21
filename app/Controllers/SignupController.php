<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SignupController extends Controller {

    public function index() {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }

    public function store() {
        helper(['form']);
        $rules = [
            'nom' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'nom' => $this->request->getVar('nom'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        } else {
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }

}
