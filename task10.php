<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 10 - Grading System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 10: Simple Grading System</h1></header>
<main>
  <form method="post">
    <label>Math</label><br>
    <input type="number" step="any" name="math" value="<?= isset($_POST['math'])?$_POST['math']:'' ?>"><br><br>
    <label>English</label><br>
    <input type="number" step="any" name="english" value="<?= isset($_POST['english'])?$_POST['english']:'' ?>"><br><br>
    <label>Science</label><br>
    <input type="number" step="any" name="science" value="<?= isset($_POST['science'])?$_POST['science']:'' ?>"><br><br>
    <button>Get Grade</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $m = $_POST['math']!=='' ? (float)$_POST['math'] : 0;
  $e = $_POST['english']!=='' ? (float)$_POST['english'] : 0;
  $s = $_POST['science']!=='' ? (float)$_POST['science'] : 0;
  $avg = ($m+$e+$s)/3;
  $grade = ($avg>=90)?'A' : (($avg>=80)?'B' : (($avg>=70)?'C' : (($avg>=60)?'D':'F')));
  echo "Scores → Math:$m, English:$e, Science:$s\n";
  echo "Average: ".number_format($avg,2)."\n";
  echo "Grade: $grade\n";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
