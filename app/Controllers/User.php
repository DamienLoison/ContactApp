<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller {

    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save() {
        helper(['form']);
        
        //Regle de validation du formulaire
        $rules = [
            'nom' => 'min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[6]|max_length[200]',
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
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }

    public function login() {
        helper(['form']);
        echo view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'nom' => $data['nom'],
                    'email' => $data['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/User/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('User/login');
    }

    public function dashboard($id = null) {
        $session = session();
//        echo $session->get('nom');
        $data = [
            'session' => $session->get('nom')
        ];
        return redirect()->to('/Accueil/');
    }

}
