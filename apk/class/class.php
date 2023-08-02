<?php

class perhitungan{
    var $sisiAlas;
    var $tinggi;

    function luasPersegi($sisiAlas){
        $hasil = $sisiAlas*$sisiAlas;
        return $hasil;
    }
    
    function luasPerPan($sisiAlas,$tinggi){
        $hasil = $sisiAlas*$tinggi;
        return $hasil;
    }
    
    function luasSegitiga($sisiAlas,$tinggi){
        $hasil = ($sisiAlas*$tinggi)/2;
        return $hasil;
    }
}

?>