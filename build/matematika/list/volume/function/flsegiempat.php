<?php 

function hitung( $panjang, $lebar, $tinggi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "km" . "³" );
    }
    if( $satuan == "hm" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "hm" . "³" );
    }
    if( $satuan == "dam" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "dam" . "³" );
    }
    if( $satuan == "m" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "m" . "³" );
    }
    if( $satuan == "dm" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "dm" . "³" );
    }
    if( $satuan == "cm" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "cm" . "³" );
    }
    if( $satuan == "mm" ) {
        return( 1/3 * $panjang * $lebar * $tinggi . " " . "mm" . "³" );
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

header("Location: ../vlsegiempat.php?hasil=" . $hasil);


?>