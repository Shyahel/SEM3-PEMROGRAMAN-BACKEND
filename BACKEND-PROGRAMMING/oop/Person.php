<?php

class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        return $this->nama;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$elsa = new Person('Salsabila Elsa Rahmadina', 'Jakarta', 'Informatika');
$suci = new Person('Alfiana Suci Handayani', 'Depok', 'Informatika');

echo $elsa->getNama();
echo '<br>';
echo $suci->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Salsabila Elsa Rahmadina',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Alfiana Suci Handayani',
//         'jurusan' => 'Teknik Informatika',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $elsa = new Person();
// $elsa->setNama('Salsabila Elsa Rahmadina');
// echo $elsa->getNama();
// echo '<br>';

// $suci = new Person();
// $suci->setNama('Alfiana Suci Handayani');
// echo $suci->getNama();