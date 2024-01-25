<?php
include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleadmin/index.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
            <?php
                    include_once('menu_sidebar.php');
                ?>
               
            </div>
        <div class="col">
         <div class="row"> 
                <div class="card-header"><i class="fa fa-users"></i>Últimos usuários cadastrados</div>
                <div class="card-board">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="name">Nome</th>
                                <th class="name">Data e registro</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th class="name">Shin</th>
                                <th class="name">Shin@gmail.com</th>
                                <th class="name">2024-01-15 20:44:05</th>
                            </tr>
                        <tr>
                                <th class="name">Kaka</th>
                                <th class="name">Kaka@gmail.com</th>
                                <th class="name">2024-01-15 20:55:04</th>
                            </tr>
                        </tbody>
                    </table>

<div class="col">
        <div class="card">
             <div class="card-header"><i class="fa fa-users"></i>Últimos agendamentos</div>
                <div class="card-board">
                    <table class="table">
                    <thead>
                            <tr>
                                <th class="name">Nome</th>
                                <th class="name">Data e horário</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th class="name">Shin</th>
                                <th class="name">2024-02-15 17:00</th>
                            </tr>
                        <tr>
                                <th class="name">Kaka</th>
                                <th class="name">2024-02-15 18:00</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
             </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php 
 include_once("footer.php");

 ?>