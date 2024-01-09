<?php 

// conneting to the database 

$servername = "localhost";
$username = "root";
$password = "";
// $database ="phpTrip";
$database ="phpTrip";


// create a connection 

$conn = mysqli_connect($servername , $username , $password , $database);

// die if connection was not successful 

if(!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}

else {
    echo "Connection was successful <br>";
};


$sql = "DELETE FROM `trip` WHERE `trip`.`dest` ='uk' LIMIT 1" ;
$result = mysqli_query($conn ,$sql);


$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows : $aff <br>";


if($result){
    echo "Deleted Succesfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Deleted Succesfully due to the error ---> .  $err" ;
};
?>