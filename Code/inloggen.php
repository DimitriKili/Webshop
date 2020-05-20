<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Code/css/Style.css">
    <link rel="stylesheet" href="../Code/css/header.css">
    <link rel="stylesheet" href="../Code/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inloggen</title>
</head>
<body>
  
<?php
include 'navbar.php';
?>
      
      <section>
        
        <article>
          <div class="login-box">
            <img src="../Code/icoontjes/download.png" class="persoon-icoon"> 
            <h1>Inloggen</h1>
            <form action="../Code/PHP_back-end/verwerk_inloggen.php" method="POST">
            <p>E-mailadres:</p>
            <input type="text" name="e-mailadres" placeholder="E-mailadres invoeren"> <br>
            <p>Wachtwoord:</p>
            <input type="password" name="wachtwoord1" placeholder="wachtwoord invoeren"><br>
            <input type="submit" name="login" value="Login"><br>
            <a href="#">Wachtwoord vergeten?</a><br>
            <a href="registratie.php">Geen acount?</a>
            </form>
          </div>
        </article>
      </section>
      
      <footer>
        <p>Footer</p>
      </footer>
</body>
</html>