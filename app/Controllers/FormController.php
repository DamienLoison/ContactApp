<?php

namespace App\Controllers;

use App\Models\FormModel;
use CodeIgniter\Controller;

class FormController extends Controller
{
    public function create()
    {
        return view('contact_form');
    }

    public function formValidation()
    {
        helper(['form', 'url']);

        $input = $this->validate([
            'Nom_Contact' => 'required|min_length[3]',
            'Prenom_Contact' => 'required|min_length[3]',
            'numTel_Contact' => 'required|numeric|max_length[10]',
            'mail_Contact' => 'required|valid_email'
        ]);
        $formModel = new FormModel();

        if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'Nom_Contact' => $this->request->getVar('Nom_Contact'),
                'Prenom_Contact' => $this->request->getVar('Prenom_Contact'),
                'numTel_Contact'  => $this->request->getVar('numTel_Contact'),
                'mail_Contact'  => $this->request->getVar('mail_Contact'),
            ]);
            return $this->response->redirect(site_url('/submit-form'));
        }
    }
}
