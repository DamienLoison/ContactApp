<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {

    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save() {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'user_name' => 'required|min_length[3]|max_length[20]',
            'user_email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'user_password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'nom' => $this->request->getVar('nom'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/User/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }

}
