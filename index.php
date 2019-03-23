<?php include_once("header.php");?>

    <div class="red-page">

        <div class="login-header animated fadeInDown">
            <img src="img/onemed-white.png">
        </div>

        <form action="" method="post" class="form-authenticate animated fadeIn" id="login-form">

            <input type="email" name="email" placeholder= "Email" id="login-email"  required >
            <input type="password" name="password" placeholder= "Password"  id="login-password" required >
            <button type="submit" form="login-form" value="Submit" class="form-button" id="login-submit">Sign In</button>

            <h1>Don't have an account? <a href="./register">Register</a></h1>
        </form>


    

    </div>


   

<?php include_once("footer.php");?>

<script src="js/login.js"></script>

