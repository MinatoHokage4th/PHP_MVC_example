<?php

class Mahasiswa_m
{
    private $mhs = [
        [
            "username" => "anton",
            "email" => "anton@local.com",
            "jurusan" => "informatika"
        ],
        [
            "username" => "budi",
            "email" => "budi@local.com",
            "jurusan" => "akuntansi"
        ],
        [
            "username" => "charles",
            "email" => "charles@local.com",
            "jurusan" => "sastra"
        ]
    ];
    // private $dbh;
    // private $stmt;
    private $table_name = 'coba_mhs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMhs()
    {
        return $this->mhs;
    }

    public function getAllMhsDB()
    {
        $this->db->query("SELECT * FROM " . $this->table_name . ";");
        // return $this->db->resultSet();
        return array($this->db->resultSet(), $this->db->rowCount());
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table_name . " WHERE id =:id;");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO " . $this->table_name . " VALUES ('', :nama, :email, :jurusan);";
        $this->db->query($query);
        $this->db->bind('nama', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id =:id;";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE " . $this->table_name . " SET username =:nama, email =:email, jurusan =:jurusan WHERE id =:id;";
        $this->db->query($query);
        $this->db->bind('nama', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function searchMhsDB()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table_name . " WHERE username LIKE :keyword OR email LIKE :keyword OR jurusan LIKE :keyword;";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return array($this->db->resultSet(), $this->db->rowCount());
    }
}
