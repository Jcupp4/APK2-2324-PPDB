<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <style>
        .radio-group {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .radio-group label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }
        .radio-group input[type="radio"] {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group radio-group">
                <label for="email-login">
                    <input type="radio" id="email-login" name="login-type" value="email" checked>
                    Email
                </label>
                <label for="nisn-login">
                    <input type="radio" id="nisn-login" name="login-type" value="nisn">
                    NISN
                </label>
            </div>

            <!-- Email input field -->
            <div class="input-group" id="email-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>

            <!-- NISN input field -->
            <div class="input-group" id="nisn-group" style="display: none;">
                <i class="fas fa-id-card"></i>
                <input type="text" name="nisn" id="nisn" placeholder="NISN" pattern="[0-9]+" minlength="10" maxlength="10">
                <label for="nisn">NISN</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <a>Don't have account yet?</a>
            <a href="register.php">Sign Up</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailLogin = document.getElementById('email-login');
            const nisnLogin = document.getElementById('nisn-login');
            const emailGroup = document.getElementById('email-group');
            const nisnGroup = document.getElementById('nisn-group');
            const emailInput = document.getElementById('email');
            const nisnInput = document.getElementById('nisn');

            function toggleLoginMethod() {
                if (emailLogin.checked) {
                    emailGroup.style.display = 'block';
                    nisnGroup.style.display = 'none';
                    emailInput.required = true;
                    nisnInput.required = false;
                } else {
                    emailGroup.style.display = 'none';
                    nisnGroup.style.display = 'block';
                    emailInput.required = false;
                    nisnInput.required = true;
                }
            }

            emailLogin.addEventListener('change', toggleLoginMethod);
            nisnLogin.addEventListener('change', toggleLoginMethod);
        });
    </script>
</body>
</html>
