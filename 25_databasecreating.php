<?php
 
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

//  create a database 

$sql = "CREATE DATABASE dbAp3";
$result = mysqli_query( $conn , $sql);

// Check for the database creation success

if ($result){
    echo "the db was a created successfully <br>";
}
else{
    echo "the db was not created successfully beacause of the ---> <br>" .mysqli_error($conn);
}

//  echo "the result is ";
//  echo var_dump($result);
 echo "<br>";



?>