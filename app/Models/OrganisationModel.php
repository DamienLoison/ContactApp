<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisationModel extends Model {

    protected $table = 'organisation';
    protected $primaryKey = 'ID_Organisation';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['ID_Organisation', 'Nom_Organisation', 'Adresse_Organisation', 'Mail_Organisation', 'Site_Organisation', 'Telephone_Organisation'];

    function getOrganisation() {
        return $this->findAll();
    }

}
