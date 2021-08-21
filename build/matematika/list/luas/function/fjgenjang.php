<?php 

function hitung( $alas, $tinggi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $alas * $tinggi . " " . "km" . "²" );
    }
    if( $satuan == "hm" ) {
        return( $alas * $tinggi . " " . "hm" . "²" );
    }
    if( $satuan == "dam" ) {
        return( $alas * $tinggi . " " . "dam" . "²" );
    }
    if( $satuan == "m" ) {
        return( $alas * $tinggi . " " . "m" . "²" );
    }
    if( $satuan == "dm" ) {
        return( $alas * $tinggi . " " . "dm" . "²" );
    }
    if( $satuan == "cm" ) {
        return( $alas * $tinggi . " " . "cm" . "²" );
    }
    if( $satuan == "mm" ) {
        return( $alas * $tinggi . " " . "mm" . "²" );
    }
}

if(isset($_POST['hitung'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $alas, $tinggi, $satuan, $hitung );

$hasil = $output;

header("Location: ../ljgenjang.php?hasil=" . $hasil);


?>