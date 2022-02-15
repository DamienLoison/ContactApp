<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DonneeModel;

class AjoutDonneeController extends Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public function index()
    {
        // helper(['form', 'url']);
        $this->DonneeModel = new DonneeModel();
        $data['contact'] = $this->DonneeModel->get_all_contact();
        return view('Recherche', $data);
    }

    // public function add_contact()
    // {
    //     helper(['form', 'url']);
    //     $this->DonneeModel = new DonneeModel();

    //     $data = array(
    //         'book_isbn' => $this->request->getPost('book_isbn'),
    //         'book_title' => $this->request->getPost('book_title'),
    //         'book_author' => $this->request->getPost('book_author'),
    //         'book_category' => $this->request->getPost('book_category'),
    //     );
    //     $insert = $this->DonneeModel->add_contact($data);
    //     echo json_encode(array("status" => TRUE));
    // }

    // public function ajax_edit($id)
    // {

    //     $this->DonneeModel = new DonneeModel();

    //     $data = $this->DonneeModel->get_by_id($id);

    //     echo json_encode($data);
    // }

    // public function update_contact()
    // {

    //     helper(['form', 'url']);
    //     $this->DonneeModel = new DonneeModel();

    //     $data = array(
    //         'book_isbn' => $this->request->getPost('book_isbn'),
    //         'book_title' => $this->request->getPost('book_title'),
    //         'book_author' => $this->request->getPost('book_author'),
    //         'book_category' => $this->request->getPost('book_category'),
    //     );
    //     $this->DonneeModel->update_contact(array('ID_Contact' => $this->request->getPost('ID_Contact')), $data);
    //     echo json_encode(array("status" => TRUE));
    // }

    // public function delete_contact($id)
    // {

    //     helper(['form', 'url']);
    //     $this->DonneeModel = new DonneeModel();
    //     $this->DonneeModel->delete_by_id($id);
    //     echo json_encode(array("status" => TRUE));
    // }

    // public function store()
    // {
    //     helper(['form', 'url']);
    //     $request = \config\Services::request();
    //     $model = new DonneeModel();
    //     // $this->request->getVar();
    //     // $request->getVar();
    //     $data = [
    //         'Nom_Contact' => $this->request->getVar('Nom_Contact'),
    //         'Prenom_Contact'  => $this->request->getVar('Prenom_Contact'),
    //         'numeroTel_Contact'  => $this->request->getVar('numeroTel_Contact'),
    //         'mail_contact'  => $this->request->getVar('mail_contact'),
    //     ];

    //     $save = $model->insert($data);

    //     // return redirect()->to(base_url('public/index.php/users'));
    // }
}