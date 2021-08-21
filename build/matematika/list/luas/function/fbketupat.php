<?php 

function hitung( $d1, $d2, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 0.5 * $d1 * $d2 . " " . "km" . "²" );
    }
    if( $satuan == "hm" ) {
        return( 0.5 * $d1 * $d2 . " " . "hm" . "²" );
    }
    if( $satuan == "dam" ) {
        return( 0.5 * $d1 * $d2 . " " . "dam" . "²" );
    }
    if( $satuan == "m" ) {
        return( 0.5 * $d1 * $d2 . " " . "m" . "²" );
    }
    if( $satuan == "dm" ) {
        return( 0.5 * $d1 * $d2 . " " . "dm" . "²" );
    }
    if( $satuan == "cm" ) {
        return( 0.5 * $d1 * $d2 . " " . "cm" . "²" );
    }
    if( $satuan == "mm" ) {
        return( 0.5 * $d1 * $d2 . " " . "mm" . "²" );
    }
}

if(isset($_POST['hitung'])) {
    $d1 = $_POST['d1'];
    $d2 = $_POST['d2'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $d1, $d2, $satuan, $hitung );

$hasil = $output;

header("Location: ../lbketupat.php?hasil=" . $hasil);


?>