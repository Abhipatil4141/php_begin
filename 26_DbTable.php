
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database ="Abhipatil";


// create a connection 

$conn = mysqli_connect($servername , $username , $password);

// die if connection was not successful 

if(!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}

else {
    echo "Connection was successful <br>";
};

//  create a database 

$sql =" CREATE TABLE `Abhipatil`.`timetable` (`Sr No` INT NOT NULL AUTO_INCREMENT , `Name` INT(10) NOT NULL , `contact` INT(12) NOT NULL , `date` INT(12) NOT NULL , PRIMARY KEY (`Sr No`)) ENGINE = InnoDB";
;
$result = mysqli_query( $conn , $sql);


// Check for the database table creation success

if ($result){
    echo "the db table was a created successfully <br>";
}
else{
    echo "the db  tablewas not created successfully beacause of the ---> <br>" .mysqli_error($conn);
}





?>