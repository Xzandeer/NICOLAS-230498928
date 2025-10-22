<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 2 - Simple Math</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 2: Simple Math</h1></header>
<main>
  <form method="post">
    <label>Number A</label><br>
    <input type="number" step="any" name="a" value="<?= isset($_POST['a'])?$_POST['a']:'' ?>"><br><br>

    <label>Number B</label><br>
    <input type="number" step="any" name="b" value="<?= isset($_POST['b'])?$_POST['b']:'' ?>"><br><br>

    <button>Calculate</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $a = $_POST['a']!=='' ? (float)$_POST['a'] : 0;
  $b = $_POST['b']!=='' ? (float)$_POST['b'] : 0;
  echo "a = $a, b = $b\n";
  echo "Sum: ".($a+$b)."\n";
  echo "Difference: ".($a-$b)."\n";
  echo "Product: ".($a*$b)."\n";
  echo "Quotient: ".($b!=0 ? $a/$b : "undefined (division by zero)")."\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
