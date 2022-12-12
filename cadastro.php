<?php
    session_start();
    include("conexao.php");
    
    $username =$_POST['username'];
    $password= $_POST['password'];
     

    $sql_code= "select count(*) as total from logins where username = ('username')";
    $result = mysqli_query($conexao, $sql_code);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] > 0) {
      echo "$username exists!"; }else{
    $sql_code = "INSERT INTO logins (username, password) VALUES ('$username', '$password')";
      if(mysqli_query($conexao, $sql_code)){
        echo  "successful registration!";
        }}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>successful registration!</title>
   <link rel="stylesheet" href="cadastrophp.css">

</head>
<body>
   <div class="main-login">
<p><a href="pagina1.php">click here to sign up</a></p>
</div>

</body>
</html>

    

    $sql = "select count(*) as total from users where usuar$username = (''usuausername')";
    $sult = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] > 0) {
      echo 'usuar$username já cadastdo";
  }else{
        $sql = "INSERT INTO logins 'usuar$username, senha)     VALUES (''usuar$username', '$senha;";
if(mysqli_query($conexao, $sql)){
echo "Usuário cadastrado com sucesso!";
}
      }

   /* $sql = "INSERT INTO logins 'usuar$username, senha)   VALUES (''usuar$username', '$senha;";
if(mysqli_query($conexao, $sql)){
 
}
/*
    $sqlus$username = mysql::nectar()->prepare("SELECT * FROM logins WHERE 'usuar$username' =?");
$sqlus$username->execute(ray('usuar$username));

    i($sqlus$username->rowCount == 1){
      echo 'usuar$username já cadastdo";
    }else{
      $sql = mysql::conectar()->prepare("INSERT INTO logins 'usuar$username, senha)   VALUES (??)");
     $sql->execute(array('usuar$username, $senha))echo "Usuário cadastrado com sucesso!";
}
    /*$sql = "INSERT INTO logins 'usuar$username, senha)   VALUES (''usuar$username', '$senha;";
if(mysqli_query($conexao, $sql)){
echo "Usuário cadastrado com sucesso!";
}


    /*$sql = "select count(*) as total from users where usuar$username = (''usuausername')";
    $sult = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['us$username_existe'] = true;       header('Location: cadastro.php');
        exit;
    }

    $sql = "INSERT INTO users 'usuar$username, senha) VUES (''usuar$username', '$senha NOW())";
   if($conexao->query($sql) === TRUE) {
      $_SESSION['status_cadastro'] = true;
   }
   $conexao->close();

   header('Location: cadastro.php');
   exit; 

   //atenção aqui

   <?php 
   /*
if(isset($_POST['submit']))
{
//print_t('Nome '.$_POST['usuar$username']);
//pri_t('Senha '.$_POST['senha']);
include_once('config.php');
 $username = $_POST[suar$username'];
 $passrd = $_POST['password'];

 $result = mysqli_query($conexao, "INSERT INTO logins usuar$username, password VALUES ($username,$senha)")}
?>
  */

?> 


