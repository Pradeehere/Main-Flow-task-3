<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>


    <div class="wrapper">
        <form action="/action.php">


            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class="fa-solid fa-lock"></i>

            </div>
            <div class="remember-forgot">
                <label for="checkbox">
                    <input type="checkbox">Remember me

                </label>
                <a href="#">Forgot password?</a>
            </div>
            <br>
            <button type="submit" class="btn">
                <a href="/htLanding-folder/LANDING-PAGE.php" >
                Login
                </a>

            </button>

            <div class="re-register-link">
                <p> Don't have an account ?<a href="signup.php">Register here</a></p>
            </div>

        </form>











    </div>



</body>

</html>