<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 6 - Salary Calculator</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 6: Salary Calculator</h1></header>
<main>
  <form method="post">
    <label>Basic Salary</label><br>
    <input type="number" step="any" name="basic" value="<?= isset($_POST['basic'])?$_POST['basic']:'' ?>"><br><br>
    <label>Allowance</label><br>
    <input type="number" step="any" name="allowance" value="<?= isset($_POST['allowance'])?$_POST['allowance']:'' ?>"><br><br>
    <label>Deduction</label><br>
    <input type="number" step="any" name="deduction" value="<?= isset($_POST['deduction'])?$_POST['deduction']:'' ?>"><br><br>
    <button>Compute</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $basic = $_POST['basic']!=='' ? (float)$_POST['basic'] : 0;
  $allow = $_POST['allowance']!=='' ? (float)$_POST['allowance'] : 0;
  $ded   = $_POST['deduction']!=='' ? (float)$_POST['deduction'] : 0;
  $net = $basic + $allow - $ded;
  echo "Basic: ".number_format($basic,2)."\nAllowance: ".number_format($allow,2)."\nDeduction: ".number_format($ded,2)."\nNet salary: ".number_format($net,2)."\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
