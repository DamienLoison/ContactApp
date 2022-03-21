<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Accueil extends Controller {

    public function index() {
        $session = session();
        $data = [
            'session' => $session->get('nom')
        ];
        
//        echo $session->get('nom');

        echo view('Accueil', $data);
    }

    public function note_patch() {
        echo view('Patch/NotePatch');
    }

    public function architecture_site() {
        echo view('pages/Architecture');
    }

    public function aide() {
        echo view('Aide');
    }

    public function me_contacter() {
        echo view('template/header');
        echo view('Reste/Contacter');
        echo view('template/footer');
    }

}
