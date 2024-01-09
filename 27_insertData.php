<?php


$servername = "localhost";
$username = "root";
$password = "";
$database ="Abhipatil";


// create a connection 

$conn = mysqli_connect($servername , $username , $password , $database);

// die if connection was not successful 

if(!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}

else {
    echo "Connection was successful <br>";
};


// variblto be inserted into the table 
$name = "152";
$contact = "456";
$date = "1402";


// sql query to be executed 
$sql = "INSERT INTO `timetable` ( `Name`, `contact`, `date`) VALUES ( $name, $contact, $date);
";

$result = mysqli_query( $conn , $sql);

// Add a new timetble to the database 
if ($result){
    echo " the record has been inserted successfully <br>";
}
else{
    echo " the record has not been inserted successfully  beacause of this error --->" . mysqli_error($conn);
}
?>