<?php
        $email = $_SESSION['login_user'];

        //Query database

        $query ="SELECT name, address,city, state, lastDate FROM clients c JOIN MedicalReportsHas m ON(c.id=m.id) 
                        JOIN serves s ON(s.clientID = m.id)
                        JOIN partners p ON(s.partnerID = p.partnerID)
		 WHERE email = '".$email."'";

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
            echo "<p>Last Visit: {$row['lastDate']}</p>";
        }
        else {
            // 0 = invalid user id
            echo "<p><b>Error:</b>Invalid user Email.</p>";
        }
?>