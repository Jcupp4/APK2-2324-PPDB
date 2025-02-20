<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="container">
        <h1 class="form-title">Registrasi Account</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fname">NISN</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">E-Mail</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Password</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Confirm Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account?</p>
            <a href="login.php" class="">Sign In</a>
        </div>
    </div>
</body>
</html>