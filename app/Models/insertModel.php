<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\BaseBuilder;

class insertModel
{
    protected $db;
    protected $id;
    public function __construct()
    {
        $this->db = db_connect();
    }
    public function insert_contact()
    {
        $builder = $this->db->table('contact');
        $data = [
            'Nom_Contact' =>        '',
            'Prenom_Contact' =>     '',
            'numeroTel_Contact' =>  '',
            'mail_Contact' =>       '',
        ];
        $builder->insert($data);
        return $this->db->affectedRows();

        mysqli_query($db, "SELECT * FROM nomdelatable WHERE champ = '{$id}'");
    }
    public function replacing()
    {
        $builder = $this->db->table('contact');
        $data = [
            'ID_Contact'  =>        '',
            'Nom_Contact' =>        '',
            'Prenom_Contact' =>     '',
            'numeroTel_Contact' =>  '',
            'mail_Contact' =>       '',
        ];
        $builder->replace($data);
        return $this->db->affectedRows();
    }
    public function set_update()
    {
        $builder = $this->db->table('contact');
        $data  = [
            '' => '',
        ];
    }
    public function updating()
    {
        $builder = $this->db->table('contact');
        $data  = [
            // 'ID_contact'=>'id',
            // 'id'=>'ID_contact',
        ];
        // $builder->where('id'=$id);
        //mysqli_query($db, "SELECT * FROM nomdelatable WHERE champ = '{$id}'");

    }
}
