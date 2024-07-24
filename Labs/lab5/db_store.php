<!-- <?php 
    require_once("db_connect.php");

?> -->

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


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store user input in DB</title>
</head>
<body>

    <?php 
        if(isset($_POST['submit'])) {
            $date = $_post['date'];
            $title = $_post['title'];
            $message = $_post['message'];

            $sql = "INSERT INTO `userform` (`date`, `title`, `message`) VALUES ($date,$title, $message) " ;
        }
    ?>

    <div class="container">
        <form action="index.php" method="post">
        <div class="input-container">
            <label for="date">Date</label>
            <input type="date" id="date" name="date"><br>
        </div>
        <div class="input-container">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="A suitable Title?" ><br>
        </div>
        <div class="input-container">
            <label for="message">Message</label>
            <input type="text" id="message" name="message" placeholder="What is your message?" ><br>
        </div>
        <button type="submit" name="submit">Submit</button>
        </form>

    </div>
    
</body>
</html>