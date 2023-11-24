<!-- Abraham Khan - 1906636 -->
<?php
//Declares variables representing the values required to connect to my database
$db_host = "localhost";
$db_user = "ak19042"; 
$db_pass = "unxvKvW1dgg2X";
$db_name = "ce154_" . $db_user; 

//Creates function to connect to the database associated with my account
function connect(){
    global $db_host, $db_user, $db_pass, $db_name, $conn;
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    return $conn;
}
?>