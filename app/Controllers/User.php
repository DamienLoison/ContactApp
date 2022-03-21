<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller {

    public function __construct() {
        helper(['form']);
        $this->load->helper('url');
        $this->load->model('user_model');
    }

    public function index() {
        //PERMET DE REDIRIGER AUTOMATIQUEMENT SUR LA PAGE DE CONNEXION !
        return redirect()->to('/User/connexion');
    }

    public function inscription() {
        helper(['form']);
        $data = [];

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'nom' => 'min_length[2]|max_length[50]',
                'email' => 'required|valid_email|is_unique[user.email]',
                'password' => 'required|min_length[4]|max_length[50]',
                'confpassword' => 'matches[password]'
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $newdata = [
                    'nom' => $this->requet->getVar('nom'),
                    'email' => $this->requet->getVar('email'),
                    'password' => $this->requet->getVar('password'),
                ];
                $model->save($newdata);
                $session = session();
                $session->setFlashdata('réussi', 'Inscription réussi');
                return redirect()->to('/');
            }
        }

        //AFFICHAGE
        echo view('user/Inscription', $data);
    }

    public function connexion() {
        helper(['form']);
        $data = [];

        //AFFICHAGE
        echo view('user/Connexion', $data);
    }

}
