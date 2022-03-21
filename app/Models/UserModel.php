<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nom', 'email', 'password', 'create_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data) {
        $data = $this->passwordhash($data);

        return $data;
    }

    protected function beforeUpdate(array $data) {
        $data = $this->passwordhash($data);

        return $data;
    }

    protected function passwordhash(array $data) {
        if (!isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'] . PASSWORD_DEFAULT);


        return $data;
    }

    function getUser() {
        return $this->findAll();
    }

}
