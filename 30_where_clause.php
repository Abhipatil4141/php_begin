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



$sql = "SELECT * FROM `trip` WHERE `Dest`= 'bihar';" ;
$result = mysqli_query($conn ,$sql);


// find the number of record returned 


// Usages of the WHERE Clause to featch data from the  database
  $num = mysqli_num_rows($result);
  $no = 1;

  echo $num;
  echo " record found in the database <br>";

  if ($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $no ." Hello " . $row['Name'] ." welcome to "  .$row['Dest'];
        echo "<br>";
       $no = $no+1;
    };
  };



//   Usges of where clause to updated the data 

$sql = "UPDATE `trip` SET `Dest` = 'pune' WHERE `trip`.`Sr No` = 1";
$result = mysqli_query($conn ,$sql);
echo var_dump($result);

$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows : $aff <br>";

if($result){
    echo "we updated the record Successfully";
}
else{
    echo " We cloud not updates the record successfully";
};

?>
