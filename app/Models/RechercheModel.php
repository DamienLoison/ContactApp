<?php

namespace App\Models;

use CodeIgniter\Model;

class RechercheModel extends Model
{
    protected $table = 'contact';
    protected $useAutoIncrement = true;
    
    function getContact()
    {
        return $this->findAll();
    }
}
