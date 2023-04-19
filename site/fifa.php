<?php

$best_soccer_players = [
    "goalkeeper" => [
        "Manuel Neuer" => ["Country" => "Germany", "Years Active" => "2006-present"],
        "Jan Oblak" => ["Country" => "Slovenia", "Years Active" => "2010-present"],
        "David de Gea" => ["Country" => "Spain", "Years Active" => "2008-present"],
    ],
    "defenders" => [
        "Sergio Ramos" => ["Country" => "Spain", "Years Active" => "2002-present"],
        "Virgil van Dijk" => ["Country" => "Netherlands", "Years Active" => "2011-present"],
        "Marcelo" => ["Country" => "Brazil", "Years Active" => "2005-present"],
    ],
    "midfielders" => [
        "Luka Modric" => ["Country" => "Croatia", "Years Active" => "2003-present"],
        "Kevin De Bruyne" => ["Country" => "Belgium", "Years Active" => "2008-present"],
        "N'Golo Kante" => ["Country" => "France", "Years Active" => "2011-present"]
    ],
    "forwards" => [
        "Cristiano Ronaldo" => ["Country" => "Portugal", "Years Active" => "2002-present"],
        "Lionel Messi" => ["Country" => "Argentina", "Years Active" => "2004-present"],
        "Robert Lewandowski" => ["Country" => "Poland", "Years Active" => "2008-present"]
    ]


];

//foreach ($best_soccer_players as $position => $players) {
  //  echo $position . nl2br("\n");
   // foreach ($players as $name => $details) {
     //   echo $name . nl2br("\n");
      //  echo "Country: " . $details["Country"] . nl2br("\n");
       // echo "Years Active: " . $details["Years Active"] . nl2br("\n");
      //  echo nl2br("\n");
    //}
//}

foreach ($best_soccer_players as $position => $players) {
    switch ($position) {
        case "goalkeeper":
            echo "Position: $position\n" . nl2br("\n");
            echo "Player: Manuel Neuer\n" . nl2br("\n");
            echo "Years Active: " . $players["Manuel Neuer"]["Years Active"] . "\n" . nl2br("\n");
            echo  nl2br("\n");
            break;
        case "defenders":
            echo "Position: $position\n" . nl2br("\n");
            echo "Player: Sergio Ramos\n". nl2br("\n");
            echo "Years Active: " . $players["Sergio Ramos"]["Years Active"] . "\n". nl2br("\n");
            echo  nl2br("\n");
            break;
        case "midfielders":
            echo "Position: $position\n" . nl2br("\n");
            echo "Player: Luka Modric\n" . nl2br("\n");
            echo "Years Active: " . $players["Luka Modric"]["Years Active"] . "\n" . nl2br("\n"). nl2br("\n");
            echo  nl2br("\n");
            break;
        case "forwards":
            echo "Position: $position\n" . nl2br("\n");
            echo "Player: Cristiano Ronaldo\n" . nl2br("\n");
            echo "Years Active: " . $players["Cristiano Ronaldo"]["Years Active"] . "\n" . nl2br("\n");
            echo  nl2br("\n");
            break;
    }
}


?>
