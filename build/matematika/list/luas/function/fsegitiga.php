<?php 

function hitung( $alas, $tinggi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 0.5 * $alas * $tinggi . " " . "km" . "²" );
    }
    if( $satuan == "hm" ) {
        return( 0.5 * $alas * $tinggi . " " . "hm" . "²" );
    }
    if( $satuan == "dam" ) {
        return( 0.5 * $alas * $tinggi . " " . "dam" . "²" );
    }
    if( $satuan == "m" ) {
        return( 0.5 * $alas * $tinggi . " " . "m" . "²" );
    }
    if( $satuan == "dm" ) {
        return( 0.5 * $alas * $tinggi . " " . "dm" . "²" );
    }
    if( $satuan == "cm" ) {
        return( 0.5 * $alas * $tinggi . " " . "cm" . "²" );
    }
    if( $satuan == "mm" ) {
        return( 0.5 * $alas * $tinggi . " " . "mm" . "²" );
    }
}

if(isset($_POST['hitung'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $alas, $tinggi, $satuan, $hitung );

$hasil = $output;

header("Location: ../lsegitiga.php?hasil=" . $hasil);


?>