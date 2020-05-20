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
    <link rel="stylesheet" href="../Code/css/registratie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>registratie</title>
</head>
<body>
  
<?php
include 'navbar.php';
?>
     
      
      
      <section>
       
        
        <article>

            <div class="registratie-box">
                <img src="../Code/icoontjes/download.png" class="persoon-icoon"> 
                <h1>Registreren</h1>
                <form action = "../Code/PHP back-end/verwerk_registeren.php" method="post">
                <p>Aanhef:</p>
                <input type="radio" name="geslacht" value="man">Dhr. <br>
                <input type="radio" name="geslacht" value="vrouw">Mevr.<br>

                <p>Voornaam:</p>
                <input type="text" name="voornaam" placeholder="Voornaam invoeren"> <br>
                <p>Tussenvoegsel:</p>
                <input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel invoeren"><br>
                <p>Achternaam:</p>
                <input type="text" name="achternaam" placeholder="Achternaam invoeren"><br>
                <p>E-mailadres:</p>
                <input type="text" name="email" placeholder="e-mailadres invoeren"><br>
                <p>Wachtwoord:</p>
                <input type="password" name="wachtwoord1" placeholder="Wachtwoord invoeren"><br>
                <input type="submit" name="Registreren" value="Registreren"><br>
                </form>
              </div>
        </article>
      </section>
      <footer>
        <p>Footer</p>
      </footer>
</body>
</html>