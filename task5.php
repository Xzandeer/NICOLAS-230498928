<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 5 - Swapping Variables</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 5: Swap Two Variables (Temp Variable)</h1></header>
<main>
  <form method="post">
    <label>Value X</label><br>
    <input type="number" step="any" name="x" value="<?= isset($_POST['x'])?$_POST['x']:'' ?>"><br><br>
    <label>Value Y</label><br>
    <input type="number" step="any" name="y" value="<?= isset($_POST['y'])?$_POST['y']:'' ?>"><br><br>
    <button>Swap</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $x = $_POST['x']!=='' ? (float)$_POST['x'] : 0;
  $y = $_POST['y']!=='' ? (float)$_POST['y'] : 0;
  echo "Before → x: $x, y: $y\n";
  $temp = $x; $x = $y; $y = $temp;
  echo "After  → x: $x, y: $y\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
