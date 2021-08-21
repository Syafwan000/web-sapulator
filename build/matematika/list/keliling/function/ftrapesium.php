<?php 

function hitung( $sisia, $sisib, $sisic, $sisid, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "km" );
    }
    if( $satuan == "hm" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "hm" );
    }
    if( $satuan == "dam" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "dam" );
    }
    if( $satuan == "m" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "m" );
    }
    if( $satuan == "dm" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "dm" );
    }
    if( $satuan == "cm" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "cm" );
    }
    if( $satuan == "mm" ) {
        return( $sisia + $sisib + $sisic + $sisid . " " . "mm" );
    }
}

if(isset($_POST['hitung'])) {
    $sisia = $_POST['sisia'];
    $sisib = $_POST['sisib'];
    $sisic = $_POST['sisic'];
    $sisid = $_POST['sisid'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $sisia, $sisib, $sisic, $sisid, $satuan, $hitung );

$hasil = $output;

header("Location: ../ktrapesium.php?hasil=" . $hasil);


?>