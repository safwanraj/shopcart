<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom-login-style.css"> <!-- Add your custom CSS file -->
</head>
<body>
    <!-- Bootstrap login form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
                <form action="user_login.php" method="post" class="login-form">
                    <h2 class="text-center">Log in</h2>
                    <p class="text-center">Please fill in your credentials to log in.</p>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Log in">
                    </div>
                    <p class="text-center">Not registered? <a href="signup.php">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
