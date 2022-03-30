<?php

class Dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari, $tinggi){
        $this -> jari_jari = $jari;
        $this -> tinggi = $tinggi;
        echo "<br/>Jari-jari : " . $jari . " cm";
        echo "<br/>Tinggi : " . $tinggi . " cm";
    }

    public function VolumeWadah(){
        return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
    }
}

class Harga extends Dispenser{

    public function __construct($hargaSegelas){
        $this -> hargaSegelas = $hargaSegelas;
        echo"<br>";
        echo "<br/> Diketahui : ";
        echo "<br/>Harga per satu gelas : Rp" . $hargaSegelas;
    }
    public function Harga(){
        return $this -> hargaSegelas * 8 ;
    }
}
    
    echo "<br/>  PHI : " . Dispenser :: PHI;
    $volumeWadah = new Dispenser(12, 26);
    $harga = new Harga(1500);
    echo "<br/> Volume Wadah : " . $volumeWadah -> VolumeWadah() . " cm3";
    echo "<br/> Harga 8 Gelas : Rp" . $harga -> Harga();

?>