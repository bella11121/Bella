<?php

if(isset($_SESSION['user_id'])){
    header('Location: ../login/login.php');
}

include_once('../login/config.php');
$con = mysqli_connect("localhost", "root", "", "database") or die("Conexão não estabelecida");


?>

<div class="list-group">
    <a href="index.php" class="list-group-item list-group-item-action "><i class="fa fa-tachometer-alt"></i> Dashboard</a>
    
    <?php 
        if($_SESSION['user_level'] == 'admin'){
    ?>
        <a href="../usuarios/users.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Usuários</a>
    <?php 
        }
    ?>
    
    <?php 
        if($_SESSION['user_level'] == 'admin'){
    ?>
         <a href="../agendament/agendaments.php" class="list-group-item list-group-item-action"><i class="fa fa-scheduling"></i> Agendamentos</a>
    <?php 
        }
    ?>   

</div>