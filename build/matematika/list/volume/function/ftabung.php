<?php 

function hitung( $phi, $jari, $tinggi, $satuan, $hitung ) {
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
        return( 22/7 * $jari * $jari * $tinggi . " " . $sat . "³" );
    }
    if( $phi == "B" ) {
        return( 3.14 * $jari * $jari * $tinggi . " " . $sat . "³" );
    }
}

if(isset($_POST['hitung'])) {
    $phi = $_POST['phi'];
    $jari = $_POST['jari'];
    $tinggi = $_POST['tinggi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $phi, $jari, $tinggi, $satuan, $hitung );

$hasil = $output;

header("Location: ../vtabung.php?hasil=" . $hasil);


?>