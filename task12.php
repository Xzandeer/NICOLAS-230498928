<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 12 - Travel Cost Estimator</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 12: Travel Cost Estimator</h1></header>
<main>
  <form method="post">
    <label>Distance (km)</label><br>
    <input type="number" step="any" name="distance" value="<?= isset($_POST['distance'])?$_POST['distance']:'' ?>"><br><br>
    <label>Fuel Consumption (km per liter)</label><br>
    <input type="number" step="any" name="kpl" value="<?= isset($_POST['kpl'])?$_POST['kpl']:'' ?>"><br><br>
    <label>Fuel Price (PHP per liter)</label><br>
    <input type="number" step="any" name="price" value="<?= isset($_POST['price'])?$_POST['price']:'' ?>"><br><br>
    <button>Estimate</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $d = $_POST['distance']!=='' ? (float)$_POST['distance'] : 0;
  $kpl = $_POST['kpl']!=='' ? (float)$_POST['kpl'] : 0;
  $p = $_POST['price']!=='' ? (float)$_POST['price'] : 0;
  if ($kpl>0) {
    $fuel_needed = $d/$kpl;
    $cost = $fuel_needed*$p;
    echo "Distance: {$d} km\nFuel consumption: {$kpl} km/L\nFuel price: PHP ".number_format($p,2)." per L\n";
    echo "Estimated fuel needed: ".number_format($fuel_needed,2)." L\nEstimated travel cost: PHP ".number_format($cost,2)."\n";
  } else {
    echo "Fuel consumption must be greater than 0.\n";
  }
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
