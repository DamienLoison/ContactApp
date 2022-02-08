<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\RechercheModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class testController extends Controller
{
    public function index()
    {
        helper(['test', 'url']);
        return view('test');
    }
}
