<?php
//cara penulisan class Mobil
class Mobil{

    //cara penulisan property
    public $warna;
    public $merk;

    //cara penulisan method
    function maju() {
        // isi method maju()
        return "Mobil maju";
    }

    function berhenti() {
        // isi method berhenti()
        return "Mobil berhenti";
    }
}

// instansiasi object
$mobil_ahmad = new Mobil();
$mobil_anton = new Mobil();

// set property
$mobil_ahmad->warna = "Hitam";
$mobil_ahmad->merk = "Toyota";

// tampilkan property
echo "Mobil Ahmad";
echo "<br>warna : " . $mobil_ahmad->warna;
echo "<br>merk : " . $mobil_ahmad->merk;

// tampilkan method
echo $mobil_ahmad->maju();
echo "<br>";
echo $mobil_ahmad->berhenti();
?>