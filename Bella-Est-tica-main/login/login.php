<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
   <!-- <header>
        <div
            
        </div>
    </header>  -->
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $senha = mysqli_real_escape_string($con,$_POST['senha' ]);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND senha='$senha' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['senha'] = $row['senha'];
                    $_SESSION['user_level'] = $row['level'];
                }else{
                    echo "<div class='message'>
                      <p>Nome ou senha incorretos</p>
                       </div> <br>";
                   echo "<a href='login.php'><button class='btn'>Voltar</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: ../web/index.php");
                }
              }else{

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Não possui conta? <a href="cadastro.php">Cadastrar agora</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>