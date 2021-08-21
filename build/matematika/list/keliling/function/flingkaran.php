<?php 

function hitung( $phi, $diameter, $satuan, $hitung ) {
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
        return( 22/7 * $diameter . " " . $sat );
    }
    if( $phi == "B" ) {
        return( 3.14 * $diameter . " " . $sat );
    }
}

if(isset($_POST['hitung'])) {
    $phi = $_POST['phi'];
    $diameter = $_POST['diameter'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $phi, $diameter, $satuan, $hitung );

$hasil = $output;

header("Location: ../klingkaran.php?hasil=" . $hasil);


?>