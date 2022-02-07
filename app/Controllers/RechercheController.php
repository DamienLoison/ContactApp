<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\RechercheModel;
use App\Models\OrganisationModel;

class RechercheController extends Controller
{
    public function index()
    {
        helper(['Recherche', 'url']);

        $model = new RechercheModel();
        $data = [
            'recherches' => $model->getContact(),
            'titre' => 'Liste des contacts',
        ];
        return view('Recherche', $data);
    }
}
