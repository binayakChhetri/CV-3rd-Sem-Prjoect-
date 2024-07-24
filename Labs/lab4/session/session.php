<?php 

    session_start();
    $_SESSION['username'] = "Bin";
    $_SESSION['favFood'] = "Momo";

    echo "We have saved your session";


?>