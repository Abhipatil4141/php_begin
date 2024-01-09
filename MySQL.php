<?php
echo " welcome to the stage where we are ready to get connected to a database <br>";

// ways to connect to a MYSQL Database 
// 1. MYSQLi extension 
// 2. PDO  - php data object

// connecting to a Database 
$servername = "localhost";
$username = "root";
$password = "";


// create a connection 

$conn = mysqli_connect($servername , $username , $password);


// die if connection was not successful 

if(!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}

else {
    echo "Connection was successful";
};
?>