<?php

//  conneting to the database 

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





$sql = "SELECT * FROM `timetable` " ;
$result = mysqli_query($conn ,$sql);


// find the number of record returned 

  $num = mysqli_num_rows($result);

  echo $num;
  echo "<br>";


//   Display the rowa returned by the sql query /

if($num>0){
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row) ;
//  echo "<br>";
//  $row = mysqli_fetch_assoc($result);
//  echo var_dump($row) ;
// echo "<br>";

// $row = mysqli_fetch_assoc($result);
//     echo var_dump($row) ;
//  echo "<br>";

//  $row = mysqli_fetch_assoc($result);
//     echo var_dump($row) ;
//  echo "<br>";

//  $row = mysqli_fetch_assoc($result);
//     echo var_dump($row) ;
//  echo "<br>";

};


// we can featch in a better way using the while loops 


while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row) ;
    echo $row['Sr No']. ' Hello' .$row['Name'] .' to '.$row['contact'];
 echo "<br>";
}
?>