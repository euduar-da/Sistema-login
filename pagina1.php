<?php
include('cadastro.php');

if(isset($_POST['username']) || isset($_POST['password'])) {

    if(strlen($_POST['username']) == 0) {
        echo "answer your username";
    } else if(strlen($_POST['password']) == 0) {
        echo "answer your password";
    } else {

        $username = $conexao->real_escape_string($_POST['username']);
        $password = $conexao->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM logins WHERE username = '$username' AND password = '$password'";
        $sql_query = $conexao->query($sql_code) or die ("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $username = $sql_query->fetch_assoc();
                if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['username'] = $username['username'];
            $_SESSION['password'] = $password['password'];

            header("Location: painel.php");
        
        }else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}      
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
   <link rel="stylesheet" href="style.css">
   <link rel="shortcut icon" href="icone.png">
</head>
<body>
    <form action="" method="POST">
   <div class="main-login">
       <div class="left-login">
       <h1> Log in <br> And to be a member of your team!</h1>
       <img src="Journey-amico.svg" class="left-login-image" alt="index">
       </div>
       <div class="rigth-login">
       <div class="card-login">
           <h1>LOGIN</h1>
           <div class="text-field">
               <label for="username"> username</label>
               <input type="text" name="username" placeholder="username">
           </div>
           <div class="text-field">
               <label for="senha">password</label>
               <input type="password" name="password" placeholder="password">
           </div>
           <input class="inputSubmit" type="submit" name="submit" value="Login">
        </form>
        <p>you don't have an account? <a href="pagina2.php">Click here!</a></p>
       </div>
   </div>
</div>
<?php 
  //header('Location: https://www.phpprogressivo.net/');
  //die();
  ?>
</body>
</html>
