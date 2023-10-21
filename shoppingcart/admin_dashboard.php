<?php include 'header.php'; ?>
<?php
include 'connection.php';
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row['role'] == 'admin') {
                // Admin dashboard
                echo "<div class='admin-container'>
                <div class='admin-sidebar'>
                    <div class='admin-sidebar-title'>Admin Dashboard</div>
                    <ul class='admin-nav'>
                        <li><a href='admin_dashboard.php' class='active'>Dashboard</a></li>
                        <li><a href='admin_category.php'>Category</a></li>
                        <li><a href='admin_products.php'>Products</a></li>
                    </ul>
                </div>
                <div class='admin-content'>
                    <div class='admin-card'>
                        <div class='admin-card-title'>Dashboard</div>
                        <div class='admin-card-body'>
                            Welcome to the admin dashboard.
                        </div>
                    </div>
                </div>
                </div>";
            } else {
                header('Location: index.php');
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();
} else {
    header('Location: user_login.php');
}
?>
<?php include 'footer.php'; ?>
