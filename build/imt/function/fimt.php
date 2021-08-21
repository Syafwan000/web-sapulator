<?php 

function hitung( $bb, $tb, $hitung ) {
    if( $tb ) {
        $tinggi = $tb / 100;
    }
    if( $bb && $tb ) {
        return( $bb / ( $tinggi * $tinggi ) );
    }
}

if(isset($_POST['hitung'])) {
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
}

$output = hitung( $bb, $tb, $hitung );

$hasil = $output;

header("Location: ../imt.php?hasil=" . $hasil);


?>