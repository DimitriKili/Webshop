<?php
session_start();
//database connectie maken 
include 'connectie.php';


//gegevens ophalen 
$email = $_POST['e-mailadres'];
$wachtwoord1 = $_POST['wachtwoord1'];


//query maken
$vraag = "SELECT * FROM klant WHERE";
$vraag .= " email = '".$email."' AND ";
$vraag .= " wachtwoord1 = '".$wachtwoord1."' ";


$resultaat = $conn->query($vraag);



if ( $resultaat->num_rows > 0 )
{
   

   $rij = $resultaat->fetch_assoc();   
   

   if (isset($rij['tussenvoegsel']))
   {
    $_SESSION['voornaam'] = $rij['voornaam'];
    $_SESSION['tussenvoegsel'] = $rij['tussenvoegsel'];
    $_SESSION['achternaam'] = $rij['achternaam'];
    $_SESSION['email'] = $rij['email'];
    $_SESSION['medewerker'] = $rij['medewerker'];
    $_SESSION['naam'] = $rij['voornaam'].' '.$rij['tussenvoegsel'].' '.$rij['achternaam'];
   }
   else
   {
    $_SESSION['voornaam'] = $rij['voornaam'];
    $_SESSION['achternaam'] = $rij['achternaam'];
    $_SESSION['email'] = $rij['email'];
    $_SESSION['medewerker'] = $rij['medewerker'];
    $_SESSION['naam'] = $rij['voornaam'].' '.$rij['achternaam'];
   }
   
   echo'welkom '  .$_SESSION['naam'].' '.'je bent nu ingelogd!';
  
  
}
else
{
   echo "Het e-mailadres en/of wachtwoord klopt niet";
}
//sleep(5);
header('location:../Index.php');
?>
