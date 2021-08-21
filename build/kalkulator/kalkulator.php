<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kalkulator</title>
  <link rel="stylesheet" href="../../css/kalkulator.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <script src="../../js/kalkulator.js" defer></script>
</head>
<body>

<div class="container">
    <div class="heading">
        <h1><i id="logo" class="fas fa-calculator"></i> Kalkulator</h1>
        <a id="back" href="../home.php"><i class="fas fa-angle-left"></i> Kembali</a>
    </div>

  <div class="calculator-grid">
    <div class="output">
      <div data-previous-operand class="previous-operand"></div>
      <div data-current-operand class="current-operand"></div>
    </div>
    <button data-all-clear class="span-two" id="blue">AC</button>
    <button data-delete id="blue">DEL</button>
    <button data-operation id="blue">÷</button>
    <button data-number id="blue2">1</button>
    <button data-number id="blue2">2</button>
    <button data-number id="blue2">3</button>
    <button data-operation id="blue">*</button>
    <button data-number id="blue2">4</button>
    <button data-number id="blue2">5</button>
    <button data-number id="blue2">6</button>
    <button data-operation id="blue">+</button>
    <button data-number id="blue2">7</button>
    <button data-number id="blue2">8</button>
    <button data-number id="blue2">9</button>
    <button data-operation id="blue">-</button>
    <button data-number id="blue2">.</button>
    <button data-number id="blue2">0</button>
    <button data-equals class="span-two" id="blue">=</button>
  </div>
  </div>
</body>
</html>