<?php 

function hitung( $sisi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $sisi * $sisi . " " . "km" . "²" );
    }
    if( $satuan == "hm" ) {
        return( $sisi * $sisi . " " . "hm" . "²" );
    }
    if( $satuan == "dam" ) {
        return( $sisi * $sisi . " " . "dam" . "²" );
    }
    if( $satuan == "m" ) {
        return( $sisi * $sisi . " " . "m" . "²" );
    }
    if( $satuan == "dm" ) {
        return( $sisi * $sisi . " " . "dm" . "²" );
    }
    if( $satuan == "cm" ) {
        return( $sisi * $sisi . " " . "cm" . "²" );
    }
    if( $satuan == "mm" ) {
        return( $sisi * $sisi . " " . "mm" . "²" );
    }
}

if(isset($_POST['hitung'])) {
    $sisi = $_POST['sisi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $sisi, $satuan, $hitung );

$hasil = $output;

header("Location: ../lpersegi.php?hasil=" . $hasil);


?>