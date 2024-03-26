<?php

class Manusia {
    public $nama;
    public $umur;

    public function setNama($name) {
        $this->nama = $name;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getInfo() {
        return "Nama: " . $this->nama  . ",Umur: " . $this->umur;
    }
}

class Buah {

}

class Kendaraan {
    
}
// membuat objek
$sem = new Manusia();
$sem->setNama("Sem");
$sem->setUmur(19);

$samu = new Manusia();
$samu->setNama("Samu");
$samu->setUmur(19);

echo $sem->getInfo();

echo "<br>";

echo $samu->getInfo();