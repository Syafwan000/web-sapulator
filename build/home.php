<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di SapuLator </title>
    <link rel="stylesheet" href="../css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    <div class="top">
        <center>
            <img src="../img/logo.png"></center>
        <h1>Halo, Selamat Datang di <span>SapuLator</span></h1>
        <p>Disini kamu tinggal pilih tool yang mau digunakan, Semoga Membantu :)</p>
        <a id="logout" href="starter.php"><i class="fas fa-angle-double-left"></i> Kembali</a>
    </div>
    <div class="hr">
        <br><br><br><hr>
    </div>
    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <input type="radio" name="slider" id="slide5">
        <input type="radio" name="slider" id="slide6">
    <div id="slides">
        <div id="overflow">
            <div class="inner">
                <div class="slide slide_1">
                    <div class="slide-content">
                        <h2 id="hp">Untuk Smartphone</h2>
                        <p>Ketuk lingkaran dibawah ini</p>
                        <p>untuk pindah slide</p>
                    </div>
                </div>
                <div class="slide slide_2">
                    <div class="slide-content">
                        <h2><i class="fas fa-calculator"></i> Matematika</h2>
                        <a id="button_nxt" href="matematika/matematika.php">Gunakan</a>
                    </div>
                </div>
                <div class="slide slide_3">
                    <div class="slide-content">
                        <h2><i class="fas fa-calculator"></i> Kalkulator</h2>
                        <a id="button_nxt" href="kalkulator/kalkulator.php">Gunakan</a>
                    </div>
                </div>
                <div class="slide slide_4">
                    <div class="slide-content">
                        <h2><i class="fas fa-balance-scale"></i> Fisika</h2>
                        <a id="button_nxt" href="fisika/fisika.php">Gunakan</a>
                    </div>
                </div>
                <div class="slide slide_5">
                    <div class="slide-content">
                        <h2><i class="fas fa-weight"></i> IMT</h2>
                        <a id="button_nxt" href="imt/imt.php">Gunakan</a>
                    </div>
                </div>
                <div class="slide slide_6">
                    <div class="slide-content">
                        <h2><i class="far fa-comment-dots"></i> Lainnya</h2>
                        <a id="button_nxt" href="lainnya/lainnya.php">Gunakan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="controls">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
        <label for="slide5"></label>
        <label for="slide6"></label>
    </div>
    <div id="bullets">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
        <label for="slide5"></label>
        <label for="slide6"></label>
    </div>
</div>

</body>
</html>