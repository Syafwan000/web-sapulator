<?php 

function hitung( $panjang, $lebar, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $panjang * $lebar . " " . "km" . "²" );
    }
    if( $satuan == "hm" ) {
        return( $panjang * $lebar . " " . "hm" . "²" );
    }
    if( $satuan == "dam" ) {
        return( $panjang * $lebar . " " . "dam" . "²" );
    }
    if( $satuan == "m" ) {
        return( $panjang * $lebar . " " . "m" . "²" );
    }
    if( $satuan == "dm" ) {
        return( $panjang * $lebar . " " . "dm" . "²" );
    }
    if( $satuan == "cm" ) {
        return( $panjang * $lebar . " " . "cm" . "²" );
    }
    if( $satuan == "mm" ) {
        return( $panjang * $lebar . " " . "mm" . "²" );
    }
}

if(isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $panjang, $lebar, $satuan, $hitung );

$hasil = $output;

header("Location: ../lppanjang.php?hasil=" . $hasil);


?>