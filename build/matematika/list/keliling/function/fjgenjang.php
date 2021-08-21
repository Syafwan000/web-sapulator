<?php 

function hitung( $sisia, $sisib, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( 2 * ( $sisia + $sisib ). " " . "km" );
    }
    if( $satuan == "hm" ) {
        return( 2 * ( $sisia + $sisib ). " " . "hm" );
    }
    if( $satuan == "dam" ) {
        return( 2 * ( $sisia + $sisib ). " " . "dam" );
    }
    if( $satuan == "m" ) {
        return( 2 * ( $sisia + $sisib ). " " . "m" );
    }
    if( $satuan == "dm" ) {
        return( 2 * ( $sisia + $sisib ). " " . "dm" );
    }
    if( $satuan == "cm" ) {
        return( 2 * ( $sisia + $sisib ). " " . "cm" );
    }
    if( $satuan == "mm" ) {
        return( 2 * ( $sisia + $sisib ). " " . "mm" );
    }
}

if(isset($_POST['hitung'])) {
    $sisia = $_POST['sisia'];
    $sisib = $_POST['sisib'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $sisia, $sisib, $satuan, $hitung );

$hasil = $output;

header("Location: ../kjgenjang.php?hasil=" . $hasil);


?>