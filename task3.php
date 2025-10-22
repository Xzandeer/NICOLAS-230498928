<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 3 - Area & Perimeter</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 3: Area &amp; Perimeter (Rectangle)</h1></header>
<main>
  <form method="post">
    <label>Length</label><br>
    <input type="number" step="any" name="length" value="<?= isset($_POST['length'])?$_POST['length']:'' ?>"><br><br>

    <label>Width</label><br>
    <input type="number" step="any" name="width" value="<?= isset($_POST['width'])?$_POST['width']:'' ?>"><br><br>

    <button>Calculate</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $L = $_POST['length']!=='' ? (float)$_POST['length'] : 0;
  $W = $_POST['width']!=='' ? (float)$_POST['width'] : 0;
  $area = $L*$W; $per = 2*($L+$W);
  echo "Length = $L, Width = $W\nArea: $area\nPerimeter: $per\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
