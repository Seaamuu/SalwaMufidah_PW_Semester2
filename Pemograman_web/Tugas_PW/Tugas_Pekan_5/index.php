<?php

class Suhu {
    public $kota;
    public $suhu;

    public function setKota($kota) {
        $this->kota = $kota;
    }

    public function setSuhu($suhu) {
        $this->suhu = $suhu;
    }

    public function getInfo() {
        return "Kota: " . $this->kota  . " Suhu: " . $this->suhu;
    }
}
// membuat objek
$depok = new Suhu();
$depok->setKota("depok");
$depok->setSuhu(26);

$bogor = new Suhu();
$bogor->setKota("Bogor");
$bogor->setSuhu(20);

echo $depok->getInfo();

echo "<br>";

echo $bogor->getInfo();