<?php
        $email = $_SESSION['login_user'];

        //Query database

        $query ="SELECT clientID,fName,lName,zipcode,email,phone FROM clients WHERE email = '".$email."'";

        $response = @mysqli_query($dbc,$query);
        
        $row = mysqli_fetch_array($response, MYSQLI_ASSOC);
        
        $count = mysqli_num_rows($response);
        if($count == 1){
            //Echo the user profile data
            echo "<p>Client ID: {$row['clientID']}</p>";
            echo "<p>First Name: {$row['fName']}</p>";
            echo "<p>Last Name: {$row['lName']}</p>";
            echo "<p>Zipcode: {$row['zipcode']}</p>";
            echo "<p>Email: {$row['email']}</p>";
            echo "<p>Phone: {$row['phone']}</p>";
            
        }
        else {
            // 0 = invalid user id
            echo "<p><b>Error:</b>Invalid user Email.</p>";
        }
?>