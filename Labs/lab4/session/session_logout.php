<?php 


    session_start();
    session_unset(); // unsets all variables
    session_destroy();

    echo "<br> You have been logged out";


?>