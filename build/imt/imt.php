<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMT</title>
    <link rel="stylesheet" href="../../css/imt.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="heading">
            <h1><i id="logo" class="fas fa-weight"></i> IMT</h1>
            <p>IMT atau Indeks Massa Tubuh adalah salah satu cara untuk mengetahui rentang berat badan ideal</p>
            <a id="back" href="../home.php"><i class="fas fa-angle-left"></i> Kembali</a>
        </div>

<div class="container2">
    <center>
        <form action="function/fimt.php" method="post">
            <table cellpadding="6">
                <tr>
                    <td>
                        <center>
                            <label id="label" for="bb">Berat Badan</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="bb" id="bb" class="angka" placeholder="*Masukkan Berat Badan" >
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label" for="tb">Tinggi Badan</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="text" name="tb" id="tb" class="angka" placeholder="*Masukkan Tinggi Badan" >
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label id="label">IMT</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <center id="hasil">
                                <?php 
                                
                                if(!empty($_GET['hasil'])) {
                                    echo  round($_GET['hasil'],2) . "&nbsp;&nbsp;";
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
                            <label id="label">Kategori</label>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <center id="hasil">
                                <?php 
                                
                                if( @$_GET['hasil'] == 0 ) {
                                    echo "Hasil" . "&nbsp;&nbsp;";
                                } elseif ( @$_GET['hasil'] <= 18.4 ) {
                                    echo "Berat Badan Kurang" . "&nbsp;&nbsp;";
                                } elseif ( @$_GET['hasil'] >= 18.5 && @$_GET['hasil'] <= 24.9 ) {
                                    echo "Berat Badan Ideal" . "&nbsp;&nbsp;";
                                } elseif ( @$_GET['hasil'] >= 25 && @$_GET['hasil'] <= 29.9 ) {
                                    echo "Berat Badan Lebih" . "&nbsp;&nbsp;";
                                } elseif ( @$_GET['hasil'] >= 30 && @$_GET['hasil'] <= 39.9 ) {
                                    echo "Gemuk" . "&nbsp;&nbsp;";
                                } elseif ( @$_GET['hasil'] >= 40 ) {
                                    echo "Sangat Gemuk" . "&nbsp;&nbsp;";
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
    </center>
</div>

</body>
</html>