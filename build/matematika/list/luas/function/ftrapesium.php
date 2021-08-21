<?php 

function hitung( $alas1, $alas2, $tinggi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "km" . "²" );
    }
    if( $satuan == "hm" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "hm" . "²" );
    }
    if( $satuan == "dam" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "dam" . "²" );
    }
    if( $satuan == "m" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "m" . "²" );
    }
    if( $satuan == "dm" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "dm" . "²" );
    }
    if( $satuan == "cm" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "cm" . "²" );
    }
    if( $satuan == "mm" ) {
        return( 0.5 * ( $alas1 + $alas2 ) * $tinggi . " " . "mm" . "²" );
    }
}

if(isset($_POST['hitung'])) {
    $alas1 = $_POST['alas1'];
    $alas2 = $_POST['alas2'];
    $tinggi = $_POST['tinggi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $alas1, $alas2, $tinggi, $satuan, $hitung );

$hasil = $output;

header("Location: ../ltrapesium.php?hasil=" . $hasil);


?>