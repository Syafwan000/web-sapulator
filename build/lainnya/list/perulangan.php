<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
    <link rel="stylesheet" href="../../../css/perulangan.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    
<div class="container">
    <h2>Perulangan</h2>

    <center>
        <form action="function/output.php" method="post">
            <table cellpadding="8">
                <tr>
                    <td colspan="2">
                        <center>
                            <label id="label" for="kalimat">Kalimat</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="text" name="kalimat" id="kalimat" placeholder="*Masukkan Kalimat" required>
                        </center>
                    </td>
                    <tr>
                    <td colspan="2">
                        <center>
                            <label id="label" for="target">Ulangi Sampai</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="target" id="target" class="angka" placeholder="*Angka" required>
                        </center>
                    </td>
                    <td>
                        <center>
                            <label id="kali">Kali</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="ulangi" value="Ulangi" id="ulangi">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
        <a href="../lainnya.php"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
    </center>
</div>

</body>
</html>

