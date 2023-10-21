<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom-signup-style.css"> <!-- Add your custom CSS file -->
    <?php
    // Show error message if captcha is not verified
    if(isset($_GET['error'])){
        echo '<script>alert("Captcha verification failed. Please try again.")</script>';
    }
    ?>
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Sign up</h2>
            <p>Please fill in this form to create an account.</p>
            <form action="user_signup.php" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <input type="text" name="address" placeholder="Address" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone no." required>
                </div>
                <div class="form-group">
                    <input type="number" name="pincode" placeholder="Pincode" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <!-- Show CAPTCHA -->
                <div class="form-group">
                    <input type="text" name="captcha" placeholder="Enter captcha" required>
                    <img src="captcha.php" alt="captcha" class="captcha-image">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Sign up">
                </div>
                <p>Already have an account? <a href="login.php">Log in</a></p>
            </form>
        </div>
    </div>
</body>
</html>
