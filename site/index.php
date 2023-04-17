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

echo $voornaam, $achternaam, $leeftijd;
?> <br>

<?php
$bonusGetallen = [5,6,19,32,56,99];
$mijnGegevens = ["Bart", 78, TRUE, 3.4];
$meervoudigeArray = [[1,2,3], [4,5,6]];
foreach ($bonusGetallen as $item ){
    echo $item . "\n";
}
foreach ($mijnGegevens as $item ){
    echo $item . "\n";
}
foreach ($meervoudigeArray as $subArray ){
    foreach ($subArray as $item) {
    echo $item . "\n";}
}
?>
<br>

<?php
$geboortejaar = "1999 ";

 if($geboortejaar > 1997 && $geboortejaar < 2012){
    echo "Jij behoort tot de generatie Z, (Zoomer) ";
}
?>
</body>
</html>