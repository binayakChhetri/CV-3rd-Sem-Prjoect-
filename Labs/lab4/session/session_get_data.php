<?php 

 session_start();

 if(isset($_SESSION['username'])) {
    echo "Welcome". $_SESSION['username'];
    echo "<br> Your favourite food is". $_SESSION['favFood'];
   
 } else {
    echo("Please login");
 }

?>