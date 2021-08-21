<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="../../../css/konversuhu.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    
<div class="container">
    <h2>Konversi Suhu</h2>

    <center>
        <form action="function/fkonversuhu.php" method="post">
            <table cellpadding="5">
                <tr>
                    <td colspan="2">
                        <center>
                            <label id="label" for="suhu">Suhu</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="text" name="suhu" id="suhu" placeholder="*Masukkan Suhu">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="dari">Dari</label>
                        </center>
                    </td>
                    <td>
                        <center>
                            <label id="label" for="ke">Ke</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <select name="dari" id="dari">
                                <option>-- Dari --</option>
                                <option value="C">Celcius</option>
                                <option value="F">Fahrenheit</option>
                                <option value="R">Reamur</option>
                                <option value="K">Kelvin</option>
                            </select>
                        </center>
                    </td>
                    <td>
                        <center>
                            <select name="ke" id="ke">
                                <option>-- Ke --</option>
                                <option value="C">Celcius</option>
                                <option value="F">Fahrenheit</option>
                                <option value="R">Reamur</option>
                                <option value="K">Kelvin</option>
                            </select>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <label id="label">Hasil</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td height="50" colspan="2">
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
                    <td colspan="2">
                        <center>
                            <input type="submit" name="konversi" value="Konversi" id="konversi">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
        <a href="../fisika.php"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
    </center>
</div>

</body>
</html>

