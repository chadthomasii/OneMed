<?php include_once("header.php");?>

    <div class="red-page">

        <div class="login-header animated fadeInDown">
            <img src="img/onemed-white.png">
            <h1>I am a...</h1>
        </div>

        
        <div class="register-button-group animated fadeIn">
            <button class="form-button" id="client-click">Client</button>
            <button class="form-button" id="partner-click"> Partner</button>
            <h1>I need to  <a href="./login">Login</a></h1>
        </div>


        <!-- ONLY ADDED WHEN BUTTON IS CLICKED, For CLIENTS -->

        <form action="register.php" method="post" class="form-authenticate animated fadeIn" id="register-client-form">

            <input type="fname" name="text" placeholder= "First Name" required>
            <input type="lname" name="text" placeholder= "Last Name" required>
            <input type="email" name="email" placeholder= "Email" required>
            <input type="number" name="zipcode" max="5" min="5" placeholder= "Zip Code" required>
            <input type="password" name="password" placeholder= "Password" required>
            <input type="password" name="confirm_password" placeholder= "Confirm Password" required>
            <button type="submit" form="register-client-form" value="Submit" class="form-button">Register</button>

            <h1>I need to  <a href="./login">Login</a></h1>
        </form>

        <!-- ONLY ADDED WHEN BUTTON IS CLICKED, For PARTNERS -->

        <form action="register.php" method="post" class="form-authenticate animated fadeIn" id="register-partner-form">

            <input type="name" name="text" placeholder= "Partner Name" required>
            <input type="email" name="email" placeholder= "Email" required>
            <input type="number" name="zipcode" max="5" min="5" placeholder= "Zip Code" required>
            <input type="password" name="password" placeholder= "Password" required>
            <input type="password" name="confirm_password" placeholder= "Confirm Password" required>
            <button type="submit" form="register-partner-form" value="Submit" class="form-button">Register</button>

            <h1>I need to  <a href="./login">Login</a></h1>
        </form>



    </div>


   

<?php include_once("footer.php");?>

<script src="js/active-form.js"></script>
