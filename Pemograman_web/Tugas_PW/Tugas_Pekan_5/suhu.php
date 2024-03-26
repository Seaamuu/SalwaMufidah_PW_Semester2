<?php

class Suhu {
    public $kota;
    public $suhu;

    public function __construct($kota, $suhu){
        $this->kota = $kota;
        $this->suhu = $suhu;
    }

    public function getKota(){
        return $this->kota;
    }

    public function getSuhu(){
        return $this->suhu;
    }
    
    public function rentangSuhu(){

        if($this->suhu >=30){
            return 'Panas';
        } elseif ( $this->suhu >= 20 ){
            return 'Normal';
        } elseif ( $this->suhu <= 20 ){
            return 'Dingin';
        }
    }
}