<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php
           
           include("config.php");

           if(isset($_POST['submit'])){

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $verify_query = mysqli_query($con, 
            "SELECT * FROM users WHERE email='$email' and senha='$senha'");
            if(mysqli_num_rows($verify_query) > 0){

                echo"<div calss='message'>
                    <p> este email já está em uso </p>
                    </div>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>voltar</button>";

            }else{
                mysqli_query($con, "INSERT INTO users(nome,email,senha)
                 VALUE('$nome','$email','$senha')") or die("erro ocorrido");
                   echo"<div calss='message'>
                   <p> Cadastrado com sucesso</p>
                   </div>";
               echo "<a href='../web/header.php'><button class='btn'>logar agora</button>";
            }
           }else{

?>
            <header>Cadastro</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Nome completo</label>
                    <input type="text" name="nome" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="senha" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Já é cadastrado? <a href="/cadastro.php">Login</a>
                </div>
            </form>
        </div>
        <?php }  ?>
      </div>
</body>
</html>