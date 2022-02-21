<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class Ajouter extends Controller {

    public $ContactModel;

    public function __construct() {
        helper('form');
        $this->ContactModel = new ContactModel();
    }
    public function ajouter_contacter() {
        echo view("Ajout/Contact/formulaire");
    }    
    public function ajouter_contacter_record() {
        $ContactModel = new ContactModel();
        $ContactModel->insert($_POST);
        echo view("Ajout/Contact/formulaire");
    }
    public function ajouter_contact() {
        $data = [];
        $data['validation'] = null;

//      $session = session();
        $session = \Config\Services::session();
//        $rules = [
//            'NomContact' => 'required|min_length[3]|max_length[50]',
//            'PrenomContact' => 'required|min_length[3]|max_length[50]',
//            'MailContact' => 'required|valid_email',
//            'TelContact' => 'required|exact_length[10]|numeric',
//            'OrganisationContact' => 'required'
//        ];
        $rules = [
            'NomContact' => 'required|min_length[3]|max_length[50]',
            'PrenomContact' => 'required|min_length[3]|max_length[50]',
            'MailContact' => 'required|valid_email',
            'TelContact' => 'required|exact_length[10]|numeric',
            'OrganisationContact' => 'required',
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $cdata = [
                    'Nom_Contact' => $this->request->getVar('NomContact', FILTER_SANITIZE_STRING),
                    'Prenom_Contact' => $this->request->getVar('PrenomContact', FILTER_SANITIZE_STRING),
                    'numeroTel_Contact' => $this->request->getVar('TelContact', FILTER_SANITIZE_STRING),
                    'mail_Contact' => $this->request->getVar('MailContact', FILTER_SANITIZE_STRING),
                    'ID_Organisation' => $this->request->getVar('OrganisationContact', FILTER_SANITIZE_STRING),
                ];
                $status = $this->ContactModel->SaveData($cdata);
                if ($status) {
                    echo "Sucess";
                } else {
                    echo "Error";
                }
            }
        } else {
            $data['validation'] = $this->validator;
        }
        return view("Ajout/Contact/form", $data);

        // $this->load->ContactModel();
        // $model  = new ContactModel();
        // $data = [
        //     'contacts'  => $model->add_contact(),
        // ];
        // $this->ContactModel->add_contact();
        // $this->load->view('sucess');
    }

    // public function ajouter_contact_valider()
    // {
    //     $model  = new ContactModel();
    //     $data = [
    //         'contacts'  => $model->add_contact(),
    //     ];
    // }





    public function ajouter_organisation() {
        $this->load->OrganisationModel();
        // $model  = new OrganisationModel();
        $this->ContactModel->add_contact();
        $this->load->view('sucess');
    }

    public function ajouter_login() {
        // $model  = new LoginModel();
        $this->load->LoginModel();
        $this->ContactModel->add_contact();
        $this->load->view('sucess');
    }

}
