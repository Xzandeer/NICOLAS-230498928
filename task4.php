<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 4 - Temperature Converter</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 4: Celsius → Fahrenheit</h1></header>
<main>
  <form method="post">
    <label>Celsius (°C)</label><br>
    <input type="number" step="any" name="c" value="<?= isset($_POST['c'])?$_POST['c']:'' ?>"><br><br>
    <button>Convert</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $c = $_POST['c']!=='' ? (float)$_POST['c'] : 0;
  $f = $c*9/5+32;
  echo "$c °C = ".number_format($f,2)." °F\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
