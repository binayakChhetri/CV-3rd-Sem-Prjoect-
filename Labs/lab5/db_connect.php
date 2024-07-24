<?php 

    // Connecting to the Database
    $servername  ="localhost";
    $username = "root";
    $password = "";
    $db_name = "userform";

    // Creating a connection object
    $conn = mysqli_connect ($servername, $username, $password, $db_name);
   
   // Die if connection was not successful
   if(!$conn) { 
    die ("Sorry we failed to connect: ". mysqli_connect_error());
   }   
   echo "Connection was successful";

?>