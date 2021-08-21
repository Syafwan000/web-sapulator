<?php 

if(isset($_POST['ulangi'])) {
    $kalimat = $_POST['kalimat'];
    $target = $_POST['target'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lainnya</title>
    <link rel="stylesheet" href="../../../../css/output.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="heading">
            <h1> Perulangan</h1>
            <p>Berikut kalimat <span>"<?= $kalimat; ?>"</span> yang diulangi sebanyak <span>"<?= $target . " " . "Kali" ?>"</span></p>
            <a id="close" href="../perulangan.php"><i class="fas fa-times-circle"></i> Tutup</a>
        <div class="hr">
            <br><br><br><hr>
        </div>
    </div>
    <div class="center"> 
        <?php $numbering = 1;?>
        <?php 
            for( $i = 1; $i <= $target; $i++ ) {
                echo $numbering++ . "." . " " . $kalimat . "<br>";
        } ?>
        
    </div>


</body>
</html>