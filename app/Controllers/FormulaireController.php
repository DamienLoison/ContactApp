<?php

namespace App\Controllers;

use CodeIgniter\Controller;
// use App\Models\ContactModel;
// use App\Models\OrganisationModel;
// use App\Models\LoginModel;

class FormulaireController extends Controller
{
    public function index()
    {
        // helper(['Accueil', 'url']);
        echo view('Formulaire');
    }
}
