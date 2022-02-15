<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisationModel extends Model
{
    protected $table = 'organisation';
    protected $useAutoIncrement = true;
    // protected $Ajout;

    function getOrganisation()
    {
        return $this->findAll();
    }
    function insertOrganisation($Ajout)
    {
        if(!empty($_POST($Ajout)))
        {
        //$this->db->insert();
        echo 'Ajout réussi à la base de donnée !';
        }else{
            echo 'Ajout à la base de donnée impossible !';
        }

    }
}
