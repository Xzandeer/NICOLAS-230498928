<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 7 - BMI Calculator</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 7: BMI Calculator</h1></header>
<main>
  <form method="post">
    <label>Weight (kg)</label><br>
    <input type="number" step="any" name="weight" value="<?= isset($_POST['weight'])?$_POST['weight']:'' ?>"><br><br>
    <label>Height (m)</label><br>
    <input type="number" step="any" name="height" value="<?= isset($_POST['height'])?$_POST['height']:'' ?>"><br><br>
    <button>Compute BMI</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $w = $_POST['weight']!=='' ? (float)$_POST['weight'] : 0;
  $h = $_POST['height']!=='' ? (float)$_POST['height'] : 0;
  if ($h>0) {
    $bmi = $w/($h*$h);
    echo "Weight: {$w}kg, Height: {$h}m\nBMI: ".number_format($bmi,2)."\n";
  } else {
    echo "Height must be greater than 0.\n";
  }
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
