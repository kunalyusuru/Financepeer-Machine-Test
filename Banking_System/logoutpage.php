<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['user_id']);

if(isset($_GET['msg'])) {
  echo $_GET['msg'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
  </head>
  <body>
    <h1 style="height: 150px" class="w3-margin-top w3-padding-32 w3-blue w3-lobster w3-center w3-container">
	<img style="float:left;display:inline-block;height:100px;width:100px;border:1px solid black;margin-top:0px;" src="../images/banklogo.jpg" alt="KUMEBE" title="KUMEBE">
     KUMEBE Bank
	<img style="float:right;display:inline-block;height:100px;width:100px;border:1px solid black;margin-top:0px;" src="../images/banklogo.jpg" alt="KUMEBE" title="KUMEBE">
   </h1>
   <a class="btn btn-primary" style="margin-left:600px;margin-top:200px;" href="index.php"> Home page </a>
   <a class="btn btn-success" style="float:right;margin-right:600px;margin-top:200px;" href="login.php"> Login page</a>
  </body>
</html>
