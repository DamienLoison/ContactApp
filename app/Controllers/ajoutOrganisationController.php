<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class ajoutOrganisationController extends Controller
{
    public function index()
    {
        // helper(['ajout-organisation', 'url']);
        echo view('FormulaireOrganisation');
    }
}
