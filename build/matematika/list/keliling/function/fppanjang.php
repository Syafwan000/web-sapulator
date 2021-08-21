<?php 

function hitung( $panjang, $lebar, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 2 * ( $panjang + $lebar ). " " . "km" );
    }
    if( $satuan == "hm" ) {
        return( 2 * ( $panjang + $lebar ). " " . "hm" );
    }
    if( $satuan == "dam" ) {
        return( 2 * ( $panjang + $lebar ). " " . "dam" );
    }
    if( $satuan == "m" ) {
        return( 2 * ( $panjang + $lebar ). " " . "m" );
    }
    if( $satuan == "dm" ) {
        return( 2 * ( $panjang + $lebar ). " " . "dm" );
    }
    if( $satuan == "cm" ) {
        return( 2 * ( $panjang + $lebar ). " " . "cm" );
    }
    if( $satuan == "mm" ) {
        return( 2 * ( $panjang + $lebar ). " " . "mm" );
    }
}

if(isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $panjang, $lebar, $satuan, $hitung );

$hasil = $output;

header("Location: ../kppanjang.php?hasil=" . $hasil);


?>