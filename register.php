<?php include_once("header.php");?>

    <div class="register-page">

        <div class="login-header-image">
            <img src="img/onemed-white.png">
        </div>

        <form action="login.php" method="post" class="login-form-group" id=login-form>

            <input type="email" name="email" placeholder= "Email" required>
            <input type="password" name="password" placeholder= "Password" required>
            <button type="submit" form="login-form" value="Submit">Sign In</button>

            <h1>Don't have an account? <a href="./register">Register</a></h1>
        </form>

    </div>


   

<?php include_once("footer.php");?>