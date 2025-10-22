<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 9 - Bank Account Simulation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 9: Bank Account Simulation</h1></header>
<main>
  <form method="post">
    <label>Starting Balance</label><br>
    <input type="number" step="any" name="balance" value="<?= isset($_POST['balance'])?$_POST['balance']:'' ?>"><br><br>
    <label>Deposit</label><br>
    <input type="number" step="any" name="deposit" value="<?= isset($_POST['deposit'])?$_POST['deposit']:'' ?>"><br><br>
    <label>Withdraw</label><br>
    <input type="number" step="any" name="withdraw" value="<?= isset($_POST['withdraw'])?$_POST['withdraw']:'' ?>"><br><br>
    <button>Update</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $bal = $_POST['balance']!=='' ? (float)$_POST['balance'] : 0;
  $dep = $_POST['deposit']!=='' ? (float)$_POST['deposit'] : 0;
  $wd  = $_POST['withdraw']!=='' ? (float)$_POST['withdraw'] : 0;
  echo "Starting balance: ".number_format($bal,2)."\n";
  echo "Deposit: ".number_format($dep,2)."\n";
  echo "Withdraw: ".number_format($wd,2)."\n";
  $bal = $bal + $dep - $wd;
  echo "New balance: ".number_format($bal,2)."\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
