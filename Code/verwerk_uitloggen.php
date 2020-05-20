<?php
session_start();

if ( isset($_SESSION['klant']) )
{
   // er is een klant ingelogd, uitloggen

  unset( $_SESSION['klant'] );    // sessie-variabele verwijderen

}

// code om je pagina door te sturen naar een andere pagina
// zodat in de navigatie login wordt getoond i.p.v. logout
