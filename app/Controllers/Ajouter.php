<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class Ajouter extends Controller {

    public $ContactModel;
    public $OrganisationModel;
    public $LoginModel;

    public function __construct() {
        helper('form');
        $this->ContactModel = new ContactModel();
    }

    /* --------------------------------|
     * --------------------------------|
     * ------------ACCUEIL-------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_accueil() {
        echo view("Ajout/accueil");
    }

    /* --------------------------------|
     * --------------------------------|
     * ------------CONTACT-------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_contact() {
        $model = new OrganisationModel();
        $data = [
            'organisations' => $model->getOrganisation()
        ];
        echo view("Ajout/Contact/formulaire", $data);
    }

    public function ajouter_contact_record() {
        $model = new OrganisationModel();
        $data = [
            'organisations' => $model->getOrganisation()
        ];
        $ContactModel = new ContactModel();
        $ContactModel->insert($_POST);
        echo view("Ajout/Contact/formulaire", $data);
    }

    /* --------------------------------|
     * --------------------------------|
     * ---------ORGANISATION-----------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_organisation() {
        $model = new OrganisationModel();
        $data = [
            'organisations' => $model->getOrganisation()
        ];
        echo view("Ajout/Organisation/form", $data);
    }

    public function ajouter_organisation_record() {
        $OrganisationModel = new OrganisationModel();
        $OrganisationModel->insert($_POST);
        echo view("Ajout/Organisation/form");
    }

    /* --------------------------------|
     * --------------------------------|
     * -------------LOGIN--------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_login() {
        echo view("Ajout/Login/form");
    }

    public function ajouter_login_record() {
        $LoginModel = new LoginModel();
        $LoginModel->insert($_POST);
        echo view("Ajout/Login/form");
    }

}
