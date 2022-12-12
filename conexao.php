<?php
$servidor= "localhost";
$username="root";
$password="";
$dbName="cadastroelogin";

$conexao=mysqli_connect($servidor, $username, $password, $dbName);
if(!$conexao){
  die("houve um erro de conexão:" .mysqli_connect_errno());
}




//try {
 //  $conn = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username
//, $senha);
  //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //} catch(PDOException $e) {
 //    echo 'ERROR: ' . $e->getMessage();
 //}
 

   //$servidor="localhost";
   //$username
 // ="root";
   //$senha="";
   //$dbName="cadastroelogin";
   
   //$conexao=mysqli_connect($servidor, $username
  //, $senha, $dbName);
  // if (!$conexao)
   //{
   //   die ("Houve um erro: ".mysqli_connect_error());
   //}
  // else
   //{
   //   echo "conexao efetuada com sucesso";
   //}
   
   ?>
   
   

   