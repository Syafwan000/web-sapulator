<?php 

if(isset($_POST['rumus'])) {
    $rumus = $_POST['rumus'];
}

if( @$rumus == false ) {
    $rumus = "Lihat Rumus";
} elseif ($rumus == true ) {
    $rumus = "1/2 x ( a + c ) x t";
} else {
    $rumus = "Lihat Rumus";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Trapesium</title>
    <link rel="stylesheet" href="../../../../css/ltrapesium.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    
<div class="container">
    <h2>Luas Trapesium</h2>
    <form method="post"><input type="submit" name="rumus" id="rumus" value="<?= @$rumus; ?>"></form>

    <center>
        <form action="function/ftrapesium.php" method="post">
            <table cellpadding="3">
                <tr>
                    <td>
                        <center>
                            <label id="label" for="alas1">Alas (a)</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="alas1" id="alas1" placeholder="*Masukkan Alas">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="alas2">Alas (c)</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="alas2" id="alas2" placeholder="*Masukkan Alas">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="tinggi">Tinggi (t)</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="tinggi" id="tinggi" placeholder="*Masukkan Tinggi">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="satuan">Satuan</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <select name="satuan" id="satuan">
                                <option>-- Satuan --</option>
                                <option value="km">km</option>
                                <option value="hm">hm</option>
                                <option value="dam">dam</option>
                                <option value="m">m</option>
                                <option value="dm">dm</option>
                                <option value="cm">cm</option>
                                <option value="mm">mm</option>
                            </select>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label">Hasil</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td height="50">
                        <center>
                        <center id="hasil">
                            <?php 
                            
                            if(!empty($_GET['hasil'])) {
                                echo $_GET['hasil'] . "&nbsp;&nbsp;";
                            } else {
                                echo "Hasil&nbsp;&nbsp;";
                            }
                            
                            ?>
                        </center>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="submit" name="hitung" value="Hitung" id="hitung">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
        <a href="../../matematika.php"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
    </center>
</div>

</body>
</html>

