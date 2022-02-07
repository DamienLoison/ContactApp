<?php

namespace App\Models;

use CodeIgniter\Model;

class RechercheModel extends Model
{
    protected $table = 'contact';

    function getContact()
    {
        return $this->findAll();
    }
}
