<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><title>Task 1 - Introduce Yourself</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>Task 1: Introduce Yourself</h1></header>
<main>
  <?php function h($s){return htmlspecialchars((string)$s,ENT_QUOTES,'UTF-8');} ?>
  <form method="post">
    <label>Name</label><br>
    <input name="name" value="<?= isset($_POST['name'])?h($_POST['name']):'' ?>"><br><br>

    <label>Age</label><br>
    <input type="number" name="age" value="<?= isset($_POST['age'])?h($_POST['age']):'' ?>"><br><br>

    <label>Favorite Color</label><br>
    <input name="color" value="<?= isset($_POST['color'])?h($_POST['color']):'' ?>"><br><br>

    <button>Show</button>
  </form>
  <pre class="out">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  echo "Hi, I’m ".h($_POST['name']).", I am ".h($_POST['age'])." years old, and my favorite color is ".h($_POST['color']).".";
}
?>
  </pre>
  <p style="text-align:center;"><a href="index.html" style="color:#6ea8ff;">← Back to Index</a></p>
</main>
</body>
</html>
