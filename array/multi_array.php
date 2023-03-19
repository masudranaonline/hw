<?php
    $cars = array(
        array("Volvo",22,18),
        array(" BMW",13,15),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2];
    echo "<br>";
    echo $cars[1][0]." In stock: ".$cars[1][1].", sold: ".$cars[1][2];
    echo "<br>";
    echo $cars[2][0]." In stock: ".$cars[2][1].", sold: ".$cars[2][2];
    echo "<br>";
    echo $cars[3][0]." In stock: ".$cars[3][1].", sold: ".$cars[3][2];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";





      for($row = 0; $row <sizeof($cars); $row++){
        echo "<p><b> Row number $row</b></p>";
        echo "<ul>";
        for($col = 0; $col < sizeof($cars)-1; $col++){
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }