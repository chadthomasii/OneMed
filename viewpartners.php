<?php
        $email = $_SESSION['login_user'];

        //Query database

        $query ="SELECT name,address,city,state,zipcode FROM partners WHERE email = '".$email."'";

        $response = @mysqli_query($dbc,$query);
        
        $row = mysqli_fetch_array($response, MYSQLI_ASSOC);
        
        $count = mysqli_num_rows($response);
        if($count == 1){
            //Echo the user profile data
            echo "<p>Partner Name: {$row['name']}</p>";
            echo "<p>Address: {$row['address']}</p>";
            echo "<p>City: {$row['city']}</p>";
	    echo "<p>State: {$row['state']}</p>";
            echo "<p>Zipcode: {$row['zipcode']}</p>";
            
        }
        else {
            // 0 = invalid user id
            echo "<p><b>Error:</b>Invalid user Email.</p>";
        }
?>