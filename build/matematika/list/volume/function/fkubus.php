<?php 

function hitung( $sisi, $satuan, $hitung ) {
    if( $satuan == "km" ) {
        return( $sisi * $sisi * $sisi . " " . "km" . "³" );
    }
    if( $satuan == "hm" ) {
        return( $sisi * $sisi * $sisi . " " . "hm" . "³" );
    }
    if( $satuan == "dam" ) {
        return( $sisi * $sisi * $sisi . " " . "dam" . "³" );
    }
    if( $satuan == "m" ) {
        return( $sisi * $sisi * $sisi . " " . "m" . "³" );
    }
    if( $satuan == "dm" ) {
        return( $sisi * $sisi * $sisi . " " . "dm" . "³" );
    }
    if( $satuan == "cm" ) {
        return( $sisi * $sisi * $sisi . " " . "cm" . "³" );
    }
    if( $satuan == "mm" ) {
        return( $sisi * $sisi * $sisi . " " . "mm" . "³" );
    }
}

if(isset($_POST['hitung'])) {
    $sisi = $_POST['sisi'];
    $satuan = $_POST['satuan'];
}

$output = hitung( $sisi, $satuan, $hitung );

$hasil = $output;

header("Location: ../vkubus.php?hasil=" . $hasil);


?>