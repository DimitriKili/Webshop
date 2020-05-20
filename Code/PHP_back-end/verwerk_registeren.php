<?php
//database connectie maken 
include 'connectie.php';

// gegevens opvragen
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$wachtwoord1 = $_POST['wachtwoord1'];

//query maken 
$vraag = "INSERT INTO klant ( voornaam, tussenvoegsel, achternaam, email, wachtwoord1)";
$vraag .= " VALUES ('".$voornaam."', '".$tussenvoegsel."', '".$achternaam."', '".$email."','".$wachtwoord1."')";

$resultaat = $conn->query($vraag);


if ( $resultaat == false )
{
   echo "Fout in insert-query of toevoegen niet gelukt!";
}

else 
{
    echo "Gelukt! je bent geregistreerd.";
    
}

header('location:../Index.php');

?>