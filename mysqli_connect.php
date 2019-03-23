<?php
$dbhost = 'localhost';
$dbUser = 'root';
$dbPassword ='root';
$dbDatabase='oneMed';

//Create connection.
$dbc = mysqli_connect($dbhost,$dbUser,$dbPassword,$dbDatabase);



//Check connection.
if ($dbc){
    //echo "Successfully Connected";
}
else {
    //Terminates the script
    die("<strong>Error:</strong> Could not connect to Databse");
}

//echo "Connected Successfully";
?>