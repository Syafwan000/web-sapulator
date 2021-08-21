<?php 

function hitung( $phi, $jari, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        $sat = "km";
    }
    if( $satuan == "hm" ) {
        $sat = "hm";
    }
    if( $satuan == "dam" ) {
        $sat = "dam";
    }
    if( $satuan == "m" ) {
        $sat = "m";
    }
    if( $satuan == "dm" ) {
        $sat = "dm";
    }
    if( $satuan == "cm" ) {
        $sat = "cm";
    }
    if( $satuan == "mm" ) {
        $sat = "mm";
    }
    if( $phi == "A" ) {
        return( 4/3 * 22/7 * $jari * $jari *$jari . " " . $sat . "³" );
    }
    if( $phi == "B" ) {
        return( 4/3 * 3.14 * $jari * $jari *$jari . " " . $sat . "³" );
    }
}

if(isset($_POST['hitung'])) {
    $phi = $_POST['phi'];
    $jari = $_POST['jari'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $phi, $jari, $satuan, $hitung );

$hasil = $output;

header("Location: ../vbola.php?hasil=" . $hasil);


?>