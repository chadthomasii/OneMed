<?php
        

require_once('mysqli_connect.php');
//To start a session
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //username and password sent from form
    $myemail = mysqli_real_escape_string($dbc,$_POST['email']);
    $mypassword = mysqli_real_escape_string($dbc,$_POST['password']);

    $sql = "SELECT id FROM clients WHERE email='$myemail' and password ='$mypassword'";
    $response = mysqli_query($dbc,$sql);
    $row = mysqli_fetch_array($response,MYSQLI_ASSOC);
    $count = mysqli_num_rows($response);
    
    //if response matched $myemail and $mypassword, table row must be 1 row
    if($count == 1){
        //Session_register("myemail");
        $_SESSION['login_user']=$myemail;
        echo "successfully logged in!";
    }
    else{
        $error = "Your Email or Password is invalid";
    }
}

?>

