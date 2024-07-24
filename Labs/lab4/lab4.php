<?php 


    $x = 5;
    $subject = "CS";
    $student = "Kishna";
    $location = "Patna";
    $fee = 150;
       



    $cars = array("Volvo", "BMV","Toyota");
    $fruits = ["Mango", "Banana","Apple"];

    if (5> 3) {
        echo ("Namaste <br>");
    }

    $age = 21;
    if ($age >= 18) {
        echo("You can vote <br>");
    } else {
        echo("You cannot vote <br>");
    }


    $num1 = 5;
    $num2 = 9;
     if ($num1 > $num2) {
         echo("Number 1 is greater than number 2 <br> ");
     } 
    else if ($num1 < $num2) {
         echo("Number 1 is smaller than number 2 <br>");
     } 
     else {
         echo("Number 1 & number 2 are equal. <br> ");
     }

     echo "<br>";



    for ($x=0; $x <= 5; $x++) {
        echo("Number: $x <br>");
    }


    echo "<br>";
    function addNumbers(int $a, int $b) {
        return $a+$b;
    }
    echo addNumbers(20,20);



    


?>