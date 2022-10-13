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

    private $dbh; // database handler
    private $stmn; // statement

    

    public function getAllMahasiswa(){
        // return $this->mhs;

        // untuk menampilkan seluruh data
        $this->stmn = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmn->execute();
        return $this->stmn->fetchAll(PDO::FETCH_ASSOC);
    }
}