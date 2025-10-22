<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task 11 - Currency Converter</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 11: Currency Converter (PHP → USD/EUR/JPY)</h1></header>
<main>
  <form method="post">
    <label>Amount in PHP:</label><br>
    <input type="number" step="any" name="amount" required><br><br>
    <button>Convert</button>
  </form>

  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $amountPHP = (float)$_POST['amount'];

  // preset exchange rates
  $rateUSD = 0.017; // PHP → USD
  $rateEUR = 0.016; // PHP → EUR
  $rateJPY = 2.70;  // PHP → JPY

  $usd = $amountPHP * $rateUSD;
  $eur = $amountPHP * $rateEUR;
  $jpy = $amountPHP * $rateJPY;

  echo "Amount in PHP: " . number_format($amountPHP, 2) . "\n";
  echo "Converted to:\n";
  echo "USD: " . number_format($usd, 2) . "\n";
  echo "EUR: " . number_format($eur, 2) . "\n";
  echo "JPY: " . number_format($jpy, 2) . "\n";
}
?>
  </pre>

  <p style="text-align:center;">
    <a href="index.html" style="color:#6ea8ff;">← Back to Index</a>
  </p>
</main>
</body>
</html>
