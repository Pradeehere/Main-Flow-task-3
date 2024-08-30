<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>

    <form action="signup.php" method="POST">

        <h2 id="one"> Discover New Horizons – </h2>
        <h2 id="two">Sign Up Now!</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="password">Confirm Password:</label>
        <input type="password" id="password" name="password" required>



        <button type="submit" >
            <a href="Login.php" class="login.www">Signup</a>
        </button>
        <a href="login.php" class="login-link">Already have an account? Log in</a>
    </form>
</body>

</html>