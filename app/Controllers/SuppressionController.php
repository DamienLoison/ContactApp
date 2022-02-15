<?php

namespace App\Controllers;

use App\Models\DonneeModel;
use CodeIgniter\Controller;

class SuppressionController extends Controller
{
    protected $valeur;

    public function index()
    {
        helper(['Suppression', 'url']);
        $this->DonneeModel = new DonneeModel();
        // $data['contact'] = $this->DonneeModel->get_all_contact();
        // return view('Suppression',$data);
        return view('Suppression');
    }
    public function choix($valeur)
    {
        if ($valeur == "Contact") {

            echo 'hello !';
        }
        if ($valeur == "Organisation") {
        }
        if ($valeur == "Login") {
        } else {
            echo ("Erreur survenue");
        }
    }

    public function delete_Contact($id, $valeur)
    {
        //suppression du contact dans la bdd via l'id
        // DELETE FROM table_name WHERE some_column=some_value;
        if ($valeur == 'contact') {
            $sql = 'DELETE FROM contact WHERE ID_Contact=' . $id;
        }

        // execute($sql);
    }
    public function delete_Organisation($id, $valeur)
    {
        //suppression de l'organisation dans la bdd via l'id
        if ($valeur == 'organisation') {
            $sql = 'DELETE FROM organisation WHERE ID_Organisation=' . $id;
        }

    }
    public function delete_Login($id, $valeur)
    {
        if ($valeur == 'login') {
            $sql = 'DELETE FROM login WHERE ID_Login=' . $id;
        }
        //suppression du login dans la bdd via l'id

    }
}
