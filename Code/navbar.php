
<!-- hier komt de navigatie bar-->

    <div class="header">
            <a href="Index.php" class="logo">neratig</a>
            <div class="header-right">
            <a href="Gitaren.php">Gitaren</a>

            <?php if(isset($_SESSION['voornaam'])) {?>
            <?php echo 'Welkom ' . $_SESSION['voornaam']; ?></a> 
            <?php } else { ?>
            <a href="registratie.php">registreren</a>
            <?php } ?>

            <?php if(isset($_SESSION['voornaam'])) {?>
                <a href="uitloggen.php">uitloggen</a>
            
            <?php if($_SESSION['medewerker'] == true) {?>
                <a href="#">Product beheren</a>
            <?php } ?>
            
            <?php } else { ?>
                <a href="inloggen.php">inloggen</a>
            <?php } ?>
            
            

            <a href="contact.php">Contact</a>
            <a class="fa fa-shopping-cart" aria-hidden="true"style="font-size:24px"></a>

            

            </div>
        </div> 



