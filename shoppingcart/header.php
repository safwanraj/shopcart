<!-- Shopping website header -->
<!-- If user is logged in show his name,cart and logout button otherwise show login and signup button -->
<?php
include 'connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row['name'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping website</title>
    <link rel="stylesheet" href="css/custom-style.css">
    <link rel="stylesheet" href="css/custom-admin-style.css">
</head>
<body>
    <header class="custom-header">
        <div class="header-logo">
            <a href="index.php">Online Shopping</a>
        </div>
        <nav class="custom-nav">
            <ul class="custom-nav-list">
                <?php
                if (isset($_SESSION['user_id'])) {
                    // Add your custom styling for the logged-in user section
                    echo '<li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                        </li>';
                    echo "<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$name</a>
                        <div class='dropdown-menu' aria-labelledby='userDropdown'>
                            <!-- Add dropdown content here (e.g., profile, settings) -->
                        </div>
                         <li class='nav-item'>
                    <a class='nav-link' href='logout.php'>Logout</a>
                    </li>
                    </li>";
                } else {
                    // Add your custom styling for the not logged-in user section
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='login.php'>Login</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='signup.php'>Signup</a>
                    </li>";
                }
                ?>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="row">
     
