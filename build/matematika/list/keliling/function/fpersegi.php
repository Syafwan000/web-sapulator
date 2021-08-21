<?php 

function hitung( $sisi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 4 * $sisi . " " . "km" );
    }
    if( $satuan == "hm" ) {
        return( 4 * $sisi . " " . "hm" );
    }
    if( $satuan == "dam" ) {
        return( 4 * $sisi . " " . "dam" );
    }
    if( $satuan == "m" ) {
        return( 4 * $sisi . " " . "m" );
    }
    if( $satuan == "dm" ) {
        return( 4 * $sisi . " " . "dm" );
    }
    if( $satuan == "cm" ) {
        return( 4 * $sisi . " " . "cm" );
    }
    if( $satuan == "mm" ) {
        return( 4 * $sisi . " " . "mm" );
    }
}

if(isset($_POST['hitung'])) {
    $sisi = $_POST['sisi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $sisi, $satuan, $hitung );

$hasil = $output;

header("Location: ../kpersegi.php?hasil=" . $hasil);


?>