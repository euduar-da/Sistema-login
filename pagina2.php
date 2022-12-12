<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrer page</title>
   <link rel="stylesheet" href="style2.css">
   <link rel="shortcut icon" href="clipart4242023.png">
</head>
<body>
    <form action="cadastro.php" method="POST">
   <div class="main-login">
       <div class="left-login">
       <img src="Online tech talks-bro.svg" class="left-login-image" alt="index">
       </div>
       <div class="rigth-login">
       <div class="card-login">
           <h1>Create your registration</h1>
           <div class="text-field">
               <label for="username">Create a username</label>
               <input type="text" name="username" placeholder="Username">
           </div>
           <div class="text-field">
               <label for="password">Create a password</label>
               <input type="password" name="password" placeholder="password">
           </div>
           <input class="inputSubmit" type="submit" name="submit" value="registrer">
        </form>
        <p>Already have an account? <a href="pagina1.php">Sign in!</a></p>
       </div>
   </div>
</div>
</body>
</html>
