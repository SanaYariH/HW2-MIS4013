<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
<body>
  <h1> Welcome to Sana Yari's Homework 2!! </h1>
  <h2> POST </h2>
  
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
  
  <h3> GET </h3>
  <form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</form>
</html>
</body>

