
<?php
        if (isset($_POST['submit'])){
            $data_missing = array();
            if (empty($_POST['fName'])){
                //Add a value to array
                $data_missing[]='Client First Name';
            }
            else{
                //Trim white space from the value and store the value
                $fName=trim($_POST['fName']);
            }
            if (empty($_POST['lName'])){
                //Add a value to array
                $data_missing[] = 'Client Last Name';
            }
            else{
                //Trim white space from the value and store the value
                $lName=trim($_POST['lName']);
            }
             if (empty($_POST['zipcode'])){
                //Add a value to array
                $data_missing[] = 'Client Zip Code';
            }
            else{
                //Trim white space from the value and store the value
                $zipcode=trim($_POST['zipcode']);
            }
            if (empty($_POST['email'])){
                //Add a value to array
                $data_missing[]='Client Email';
            }
            else {
                 //Trim white space from the value and store the value
                $email=trim($_POST['email']);
            }
            if(empty($_POST['password'])){
                //Add a value to array
                $data_missing[]='Password';
            }
            else{
                //Trim white space from the value and store the value
                $password = trim($_POST['password']);
            }
         
            if(empty($data_missing)){
                require_once ('mysqli_connect.php');
                $query = "INSERT INTO partners(fname,lname,zipcode,email,password
                        ) VALUES (?,?,?,?,?)";
                
              
                $stmt = mysqli_prepare($dbc,$query);
                //i - Integers d -Doubles b - Blods s -everything else
                mysqli_stmt_bind_param($stmt,"sssss",$fName,$lName,$zipcode,$email,$password);
                mysqli_stmt_execute($stmt);
                $affectedRows = mysqli_stmt_affected_rows($stmt);
                
                if($affectedRows ==1){
                    echo 'Client Successfully Registered Entered';
                    echo "Client Added: ".$_POST["fName"];
                    mysqli_stmt_close($stmt);
                    mysqli_close($dbc);
                }
                else{
                    echo 'Error Occured <br/>';
                    echo mysqli_error($dbc);
                    mysqli_stmt_close($stmt);
                    mysqli_close($dbc);
                }
                
        }      
        else{
            echo 'You need to enter the following data <br/>';
            foreach($data_missing as $missing){
                echo "$missing<br />";
            }
        }
           
      }
           
 ?>

