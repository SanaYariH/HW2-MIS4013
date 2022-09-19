<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
<body>
  <h1> Welcome to Sana Yari's Homework 2!! </h1>
  <br></br>
  
  <h2> POST - Function </h2>
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
  <br></br>
  
  <h3> GET - Function </h3>
  <form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
    <br></br>
</form>
</form>
</html>
</body>

