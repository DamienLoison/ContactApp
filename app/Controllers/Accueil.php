<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Accueil extends Controller {

    public function index() {
        // helper(['Accueil', 'url']);
        echo view('Accueil');
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

}
