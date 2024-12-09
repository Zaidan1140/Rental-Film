<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rentals</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Limelight&family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css"> <!-- Link ke file CSS -->
</head>
<body>
    <div class="login-container">
        <div class="logo-login-wrapper">
            <div class="logo">
                <h1>RENTALS*<p></p></h1>
                <p>LOGIN</p>
            </div>

            <div class="login-form">
                <!-- Form login -->
                <form id="login-form" action="process-login.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="PASSWORD" required>
                    <button type="submit">SUBMIT</button>
                </form>
                <p class="login-message">Already have an account? <a href="register.php">Register</a></p>
                <div class="social-login">
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="google-icon.png" alt="Google"></a>
                    <a href="#"><img src="X.png" alt="X"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-Up Confirmation -->
    <div id="confirmation-popup" class="popup">
        <div class="popup-content">
            <h2>Konfirmasi</h2>
            <p>Apakah Anda sudah yakin username, email, dan password Anda benar?</p>
            <button id="confirm-btn">Ya</button>
            <button id="cancel-btn">Tidak</button>
        </div>
    </div>

    <script src="login.js"></script> <!-- Link ke file JavaScript -->
</body>
</html>
