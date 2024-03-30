<?php

class Mahasiswa_m{
    private $mhs = [
        [
            "username" => "anton",
            "email"=>"anton@local.com",
            "jurusan"=>"informatika"
        ],
        [
            "username"=>"budi",
            "email"=>"budi@local.com",
            "jurusan"=>"akuntansi"
        ],
        [
            "username"=>"charles",
            "email"=>"charles@local.com",
            "jurusan"=>"sastra"
        ]
    ];
    // private $dbh;
    // private $stmt;
    private $table_name = 'coba_mhs';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMhs(){
        return $this->mhs;
    }

    public function getAllMhsDB(){
        $this->db->query("SELECT * FROM ".$this->table_name.";");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query("SELECT * FROM ".$this->table_name." WHERE id=:id;");
        $this->db->bind('id',$id);
        return $this->db->single();
    }

}
?>