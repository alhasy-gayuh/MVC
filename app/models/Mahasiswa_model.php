<?php 

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Gayuh Alhasy",
    //         "nim" => "123243",
    //         "email" => "gayuh@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Anisa Angel",
    //         "nim" => "0966999",
    //         "email" => "andre@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Ahmad Mubalighin",
    //         "nim" => "88393628",
    //         "email" => "andre@gmail.com",
    //         "jurusan" => "Management Informasi"
    //     ]
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa(){

        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
}