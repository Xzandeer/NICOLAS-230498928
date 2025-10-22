<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 8 - String Manipulation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 8: String Manipulation</h1></header>
<main>
  <?php function h($s){return htmlspecialchars((string)$s,ENT_QUOTES,'UTF-8');} ?>
  <form method="post">
    <label>Sentence</label><br>
    <input name="sentence" style="width:100%" value="<?= isset($_POST['sentence'])?h($_POST['sentence']):'' ?>"><br><br>
    <button>Analyze</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $s = $_POST['sentence'] ?? '';
  echo "Sentence: ".h($s)."\n";
  echo "Characters: ".strlen($s)."\n";
  echo "Words: ".str_word_count($s)."\n";
  echo "Upper: ".strtoupper($s)."\n";
  echo "Lower: ".strtolower($s)."\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
