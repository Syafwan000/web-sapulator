<?php 

function hitung( $sisia, $sisib, $sisic, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $sisia + $sisib + $sisic . " " . "km" );
    }
    if( $satuan == "hm" ) {
        return( $sisia + $sisib + $sisic . " " . "hm" );
    }
    if( $satuan == "dam" ) {
        return( $sisia + $sisib + $sisic . " " . "dam" );
    }
    if( $satuan == "m" ) {
        return( $sisia + $sisib + $sisic . " " . "m" );
    }
    if( $satuan == "dm" ) {
        return( $sisia + $sisib + $sisic . " " . "dm" );
    }
    if( $satuan == "cm" ) {
        return( $sisia + $sisib + $sisic . " " . "cm" );
    }
    if( $satuan == "mm" ) {
        return( $sisia + $sisib + $sisic . " " . "mm" );
    }
}

if(isset($_POST['hitung'])) {
    $sisia = $_POST['sisia'];
    $sisib = $_POST['sisib'];
    $sisic = $_POST['sisic'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $sisia, $sisib, $sisic, $satuan, $hitung );

$hasil = $output;

header("Location: ../ksegitiga.php?hasil=" . $hasil);


?>