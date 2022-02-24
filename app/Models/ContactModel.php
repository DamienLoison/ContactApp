<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\MySQLi\Builder;

class ContactModel extends Model {

    protected $table = 'contact';
    protected $primaryKey = 'ID_Contact';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['Nom_Contact', 'Prenom_Contact', 'numeroTel_Contact', 'mail_Contact', 'ID_Organisation', 'Nom_Organisation_Contact'];
    //Variable
    protected $db;
    protected $id;
    protected $choix;

    public function __construct() {
        parent::__construct();
        $this->db = db_connect();
    }

    public function SaveData($data) {
        $db = \Config\Database::connect();
        $builder = $this->db->table('contact');

        $res = $builder->insert($data);
        if ($res->connID->affected_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public function recherche_contact($choix, $recherche) {
        $builder = $this->db->table('contact');
        if ($choix == "ID") {
            $query = "SELECT ID_Contact FROM contact WHERE $recherche";
        }
        if ($choix == "NOM") {
            $query = "SELECT Nom_Contact FROM contact WHERE $recherche";
        }
        if ($choix == "PRENOM") {
            $query = "SELECT Prenom_Contact FROM contact WHERE $recherche";
        }
        if ($choix == "MAIL") {
            $query = "SELECT mail_Contact FROM contact WHERE $recherche";
        }
        if ($choix == "TELEPHONE") {
            $query = "SELECT numTel_Contact FROM contact WHERE $recherche";
        } else {
            $query = null;
        }
        // $this->assign('ResultatRecherche', $query);
        // $query1 = $query->get();
        // $result = $query1->getResult();
        // $all = $query1->getResult();
        $all = $query;
        return $all;
        // return $query;
        // $query   = $builder->get();
    }

    //Affiche l'ensemble des données 
    public function getContact() {
        return $this->findAll();
    }

}
