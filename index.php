<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ruqia</title>
  </head>
  <body>
    <h1> Assignment 1 </h1>
    <p>Welcome, <?= $_SESSION['username']?></p>
    <p><a href="/login.php">Click here to login</a></p>
  </body>
  <footer>
    <p><a href="/logout.php"> Click here to logout </a></p>
  </footer>
</html>