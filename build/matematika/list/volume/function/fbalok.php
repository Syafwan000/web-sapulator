<?php 

function hitung( $panjang, $lebar, $tinggi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $panjang * $lebar * $tinggi . " " . "km" . "³" );
    }
    if( $satuan == "hm" ) {
        return( $panjang * $lebar * $tinggi . " " . "hm" . "³" );
    }
    if( $satuan == "dam" ) {
        return( $panjang * $lebar * $tinggi . " " . "dam" . "³" );
    }
    if( $satuan == "m" ) {
        return( $panjang * $lebar * $tinggi . " " . "m" . "³" );
    }
    if( $satuan == "dm" ) {
        return( $panjang * $lebar * $tinggi . " " . "dm" . "³" );
    }
    if( $satuan == "cm" ) {
        return( $panjang * $lebar * $tinggi . " " . "cm" . "³" );
    }
    if( $satuan == "mm" ) {
        return( $panjang * $lebar * $tinggi . " " . "mm" . "³" );
    }
}

if(isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $tinggi = $_POST['tinggi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $panjang, $lebar, $tinggi, $satuan, $hitung );

$hasil = $output;

header("Location: ../vbalok.php?hasil=" . $hasil);


?>