<?php

$server = "localhost";
$gebruiker = "root";
$wachtwoord = "";
$databasenaam = "webshop";

$conn = new mysqli($server, $gebruiker, $wachtwoord, $databasenaam);

if ( $conn->connect_error )
{
   die( "fout! geen conectie met database ".$conn->connect_error );
}
 

?>