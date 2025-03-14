<?php

class Mahasiswa {
    private $nama;  //access modifier 
    private $nim;
    private $semester;
    // private $buku = New Buku();

    public function setNama($nama) {
        return $this->nama = $nama;
    }
    public function setNim($nim) {
        return $this->nim = $nim;
    }
    public function setSemester($semester) {
        return $this->semester = $semester;
    }

    public function getNama() {
        return $this->nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getSemester() {
        return $this->semester;
    }
}

$budi = New Mahasiswa;
$budi->setNama('Budi Santoso');
$budi->setNim('0110221234');
$budi->setSemester(4);

$siti = New Mahasiswa;
$siti->setNama('Siti Nurjanah');
$siti->setNim('0110221235');
$siti->setSemester(4);

echo $budi->getNama() . '<br>';
echo $budi->getNim() . '<br>';
echo $budi->getSemester() . '<br>';

echo '<hr>';

echo $siti->getNama() . '<br>';
echo $siti->getNim() . '<br>';
echo $siti->getSemester() . '<br>';