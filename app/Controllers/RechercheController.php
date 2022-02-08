<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\RechercheModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class RechercheController extends Controller
{
    public function index()
    {
        helper(['Recherche', 'url']);

        $model = new RechercheModel();
        $model1 = new OrganisationModel();
        $model2 = new LoginModel();
        $data = [
            'contacts' => $model->getContact(),
            'organisations' => $model1->getOrganisation(),
            'logins' => $model2->getLogin(),
        ];

        return view('Recherche', $data);
    }
}
