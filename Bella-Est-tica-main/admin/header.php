<?php
    session_start();

if(!isset($_SESSION['email'])){
    header('Location: ../login/login.php');
}

include_once('../login/config.php');
$con = mysqli_connect("localhost", "root", "", "database") or die("Conexão não estabelecida");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devic-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleadmin/header.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
    <div class="interface"><!--interface-->
        
        <div class="logo"><!--logo-->

                <a href="#../web/index.php">
                        <img  src="../img/logo07.png" alt="logo" width="115px" >
                </a>

        </div><!--logo-->

<nav class="menu-desktop">
  <div class="container">
  
    <ul>
      <li><a class="button" href="../web/index.php">Sair</a></li>
    </ul>
    </div>
  </div>
</nav>

<!--interface-->
</header>