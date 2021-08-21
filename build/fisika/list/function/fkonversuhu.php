<?php 

function konversi( $suhu, $dari, $ke, $konversi ) {
	if( $dari == "C" && $ke == "C" ) {
		return $suhu . " " . "°C";
	}
	if( $dari == "C" && $ke == "F" ) {
		return( $suhu * 9/5 ) + 32 . " " . "°F";
	}
	if( $dari == "C" && $ke == "R" ) {
		return $suhu * 4/5 . " " . "°R";
	}
	if( $dari == "C" && $ke == "K" ) {
		return $suhu + 273 . " " . "K";
	}
	if( $dari == "F" && $ke == "F" ) {
		return $suhu . " " . "°F";
	}
	if( $dari == "F" && $ke == "C" ) {
		return( $suhu - 32 ) * 5/9 . " " . "°C";
	}
	if( $dari == "F" && $ke == "R" ) {
		return( $suhu - 32 ) * 4/9 . " " . "°R";
	}
	if( $dari == "F" && $ke == "K" ) {
		return( $suhu - 32 ) * 5/9 + 273 . " " . "K";
	}
	if( $dari == "R" && $ke == "R" ) {
		return $suhu . " " . "°R";
	}
	if( $dari == "R" && $ke == "C" ) {
		return $suhu * 5/4 . " " . "°C";
	}
	if( $dari == "R" && $ke == "F" ) {
		return( $suhu * 9/4 ) + 32 . " " . "°F";
	}
	if( $dari == "R" && $ke == "K" ) {
		return( $suhu * 5/4 ) + 273 . " " . "K";
	}
	if( $dari == "K" && $ke == "K" ) {
		return $suhu . " " . "K";
	}
	if( $dari == "K" && $ke == "C" ) {
		return $suhu - 273 . " " . "°C";
	}
	if( $dari == "K" && $ke == "F" ) {
		return( $suhu - 273 ) * 9/5 + 32 . " " . "°F";
	}
	if( $dari == "K" && $ke == "R" ) {
		return( $suhu - 273 ) * 4/5 . " " . "°R";
	}

}


if(isset($_POST['konversi'])) {
    $suhu = $_POST['suhu'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];
}

$output = konversi( $suhu, $dari, $ke, $konversi );

$hasil = $output;

header("Location: ../konversuhu.php?hasil=" . $hasil);


?>