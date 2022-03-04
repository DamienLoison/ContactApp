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

    //Affiche l'ensemble des données 
    public function getContact() {
        return $this->findAll();
    }

}
