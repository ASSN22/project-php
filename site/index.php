<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta hhtp-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width , intial-scale= 1.0">
    <title> Mijn eerste project</title>
    
</head>
<body>
<?php
$voornaam = "Nour ";
$achternaam = "Al-Shammari ";
$leeftijd = "23 ";

$geboortejaar = "1999 ";

 echo $voornaam, $achternaam, $leeftijd;

 if($geboortejaar > 1997 && $geboortejaar < 2012){
    echo "Jij behoort tot de generatie Z, (Zoomer) ";
}
?>
</body>
</html>