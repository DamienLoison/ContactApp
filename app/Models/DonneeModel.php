<?php

namespace App\Models;

use CodeIgniter\Model;

class DonneeModel extends Model
{
    protected $table = 'contact';
    protected $db;
    protected $id;
    protected $allowedFields = ['Nom_Contact', 'Prenom_Contact', 'numeroTel_Contact', 'mail_contact'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table('contact');
    }
    //affiche toute les données
    public function get_all_contact()
    {
        $query = $this->db->query('select * from contact');

        return $query->getResult();
    }
    //cherche une donnée par son ID
    public function get_contact_by_id($id)
    {
        $sql = 'select * from contact where ID_Contact =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }
    //ajoute un contact à la base de donnée 
    public function add_contact($data)
    {
        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }
    public function update_contact($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);

        return $this->db->affectedRows();
    }
    public function delete_contact_by_id($id)
    {
        $this->db->table($this->table)->delete(array('ID_Contact' => $id));
    }



    // public function Update()
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('users');
    // }
    // function add($data){
    //     return $this-&gt;db-&gt;insert('pages',$data);
    //   }
    // function update($id,$data){
    //     $this-&gt;db-&gt;where('id',$id);
    //     return $this-&gt;db-&gt;update('pages',$data);
    //   }
    // function delete($id){
    //     return $this-&gt;db-&gt;delete('pages',array('id'=&gt;$id));
    //   }
    // retourne la liste des pages
    // function getListe(){
    // SELECT * FROM pages
    //     $query = $this-&gt;db-&gt;get('pages');

    //     if($query-&gt;num_rows() &gt; 0){
    //     $rows = $query-&gt;result();
    //     return $rows;
    //     }
    // }

    //retourne l'enregistrement dans la
    //base de données correspondant à l'id
    //passée en paramètre
    // function get($id){
    //     //SELECT * FROM pages WHERE id = '$id'
    //     $query = $this-&gt;db-&gt;get_where('pages',array('id'=&gt;$id));

    //     if($query-&gt;num_rows()&gt;0){
    //     $rows = $query-&gt;result();
    //     return $rows[0];
    //     }
    // }
}
