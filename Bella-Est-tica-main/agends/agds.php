<?php
   include_once("../login/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
<header>Agendamento</header>
            <form action="" method="POST">

            <div>
            <input class="input" placeholder="Digite seu nome" type="text" name="name" id="name" autocomplete="off" required>

            </div>

            <div>
            <input class="input" placeholder="Deixe seu WhatsApp" type="tel" name="número" id="número" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" autocomplete="off" required>

            </div>

            <div>
            <input class="input" placeholder="Abertos entre 11:00 - 21:00" type="number" name="número" id="número" autocomplete="off" required>
            </div>

            <div>
            <input class="input" placeholder="Digite seu e-mail" type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <select>
                <option class="Estetica facial">Botox</option>
                <option class="Estetica facial">Ácido hialurônico</option>
                <option class="Estetica facial">Micro-agulhamento</option>
                <option class="Estetica corporal">Radiofrequência</option>
                <option class="Estetica corporal">Lipoaspiração a laser</option>
                <option class="Cirúrgia">Lipocavitação</option>
            </select>
            
            <div class="field">    
                <input type="submit" class="btn" name="submit" value="Register" required>
            </div>

</body>
</html>