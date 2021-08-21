<?php 

if(isset($_POST['rumus'])) {
    $rumus = $_POST['rumus'];
}

if( @$rumus == false ) {
    $rumus = "Lihat Rumus";
} elseif ($rumus == true ) {
    $rumus = "Sisi A + Sisi B + Sisi C";
} else {
    $rumus = "Lihat Rumus";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliling Segitiga</title>
    <link rel="stylesheet" href="../../../../css/ksegitiga.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    
<div class="container">
    <h2>Keliling Segitiga</h2>
    <form method="post"><input type="submit" name="rumus" id="rumus" value="<?= @$rumus; ?>"></form>

    <center>
        <form action="function/fsegitiga.php" method="post">
            <table cellpadding="3">
                <tr>
                    <td>
                        <center>
                            <label id="label" for="sisia">Sisi A</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="sisia" id="sisia" placeholder="*Masukkan Sisi">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="sisib">Sisi B</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="sisib" id="sisib" placeholder="*Masukkan Sisi">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="sisic">Sisi C</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="sisic" id="sisic" placeholder="*Masukkan Sisi">
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

