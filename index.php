<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
<body>
  
  <h1 style="color:blue; text-align:center;">Welcome to Sana Yari's Homework 2!</h1>
  <p style="color:red; text-align:center;">Enter your Name and Email Address please!</p>
  <br></br>
  
  <p style="text-align:center;">
  <h2 style="text-align:center;"> GET - Function </h2>
  <form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
    </p>
    <br></br>
  
  <p style="text-align:center;">
  <h2 style="text-align:center;"> POST - Function </h2>
  <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
  </p>
  <br></br>
  
  
</form>
</form>
</html>
</body>

