<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta hhtp-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width , intial-scale= 1.0">
    <title> Spongebob</title>
</head>
<body>
<?php
$spongebob_main_characters = [
    "Spongebob" => [
        "age" => 12,
        "job" => "fry cook"
    ],
    "Patrick" => [
        "age" => 12,
        "job" => "unemployed"
    ],
    "Sandy" => [
        "age" => 25,
        "job" => "scientist"
    ],
    "Squideward " => [
        "age" => 35,
        "job" => "cashier"
    ]
    ];

   
    foreach ($spongebob_main_characters as $name => $details) {
        echo $name . nl2br("\n")
        . $details["age"] . nl2br("\n")
         . $details["job"] . nl2br("\n");
    }




?>
</body>
</html>