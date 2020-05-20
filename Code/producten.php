<?php
//database connectie maken 
include 'connectie.php';

//QUERY MAKEN
$vraag = "SELECT * FROM producten";

$resultaat = $conn->query($vraag);

if ( $resultaat->num_rows > 0 )
{
   $rij = $resultaat->fetch_assoc();   
}

else

{

}
?>