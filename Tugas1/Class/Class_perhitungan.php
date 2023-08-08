<?php
class perhitungan {
    function luasPersegi($bil1){
        $sisi = $bil1;
        $luas = $sisi * $sisi;
        return "sisi = " . $sisi . "<br> Luas = " . $sisi . " x " . $sisi . "<br> Hasil : " . $luas;
    }

    function luasPersegiPanjang($bil1, $bil2){
        $panjang = $bil1;
        $lebar = $bil2;
        $luas = $panjang * $lebar;
        return "panjang = " . $panjang . "<br> Lebar = " . $lebar .  "<br> Luas = " . $panjang . " x " . $lebar . "<br> Hasil : " . $luas;
    }

    function luasSegitiga($bil1, $bil2){
        $alas = $bil1;
        $tinggi = $bil2;
        $luas = $alas * $tinggi / 2;
        return "alas = " . $alas . "<br> tinggi = " . $tinggi . "<br> Luas = " . $alas . " x " . $tinggi . "<br> Hasil : " . $luas;
    }
}
?>
