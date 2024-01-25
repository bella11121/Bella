<?php
session_start();

include_once('../login/config.php');
$con = mysqli_connect("localhost", "root", "", "database") or die("Conexão não estabelecida");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!--fim do código-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto+Condensed:ital,wght@1,600&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <title>Bella Estética</title>
    <link rel="stylesheet" href="../stylesite/styless.css">

</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<header>


    <div class="interface"><!--interface-->
        
                <div class="logo"><!--logo-->

                        <a href="#">
                                <img  src="../img/logo07.png" alt="logo" width="115px" >
                        </a>

                  </div><!--logo-->
  
    <nav class="menu-desktop">
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#products">Tratamentos</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="../login/login.php">Login</a></li>
        </ul>
    </nav>

    <?php 
        $textButton = "Dashboard";

        if(isset($_SESSION['user_id'])){
            if($_SESSION['user_level'] == 'admin'){
                $textButton = "Área do Administrador";
            }
        }
    ?>

<a class="btn-contact" id="btn-contato" href="../admin/index.php">
     <?php echo  "$textButton"  ?>
    </a>
    </div><!--interface-->
</header>
<main>
    <section class="containerproje"><!--topo da página-->
        <div class="slide-container active">
            <div class="slide">
                <div class="contentproje">
                    <h3>Bella Estética<span>.</span></h3>
                    <p>"Bem-vindo à nossa clínica de estética, um refúgio dedicado à sua beleza e bem-estar.
                        Aqui, combinamos expertise e cuidado para proporcionar tratamentos personalizados que
                        realçam a sua beleza natural.</p>
                    
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="contentproje">
                    <h3>Conheça nossos tratamentos<span>.</span></h3>
                    <p>Microagulhamento,micro-pigmentação,<br>remoção de manchas,botox,ácido hialurônico,radiofrequência,lipoaspiração a laser,<br>lipocavitação e entre outros...</p>
                    
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="contentproje">
                    <h3>Agende sua avaliação<span>.</span></h3>
                    <p>Aproveite nossos serviços de qualidade e agendamento grátis.</p>
                    
                </div>
            </div>
        </div>


        <div id="prev" onclick="prev()">
            < </div>
                <div id="next" onclick="next()"> > </div>
    </section><!--topo da página-->
    <script src="interacao/script.js"></script>

</section>

</main>

<body>

</body>

</html>