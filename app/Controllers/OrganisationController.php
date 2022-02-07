<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OrganisationModel;

class OrganisationController extends Controller
{

    public function index()
    {
        helper(['Organisation', 'url']);

        $model = new OrganisationModel();
        $data = [
            'organisations' => $model->getOrganisation(),
            'titre' => 'Liste des organisations'
        ];
        echo view('Organisation', $data);
    }
}
