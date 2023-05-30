<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="CSS\style-login.css">
</head>

<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "Akisophiekingking";
$database = "login_credentials";

// Establish a connection
$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["admin_submit"])) {
    $username = $_POST["admin_username"];
    $password = $_POST["admin_password"];

    $query = "SELECT * FROM admin_credentials WHERE BINARY username = '$username' AND BINARY password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            header("Location: admin-homepage.php");
            exit();
        } else {
            echo '<script>showAlert("Incorrect credentials. Please try again.");</script>';
        }
    } else {
        echo '<script>showAlert("Query execution failed: ' . mysqli_error($connection) . '");</script>';
    }
}



mysqli_close($connection);
?>

<style>
    body {
        background-image: url(images/image.jpg);
    }
</style>

<body>
    <header>
        <div class="header">
            <img src="images/lspu-logo.png" alt="LSPU-LOGO" class="logo">
            <div class="label">
                <h1 class="title"><i>Laguna State Polytechnic University San Pablo City Campus</i></h1>
                <h2 class="college">College of Computer Studies</h2>
            </div>
            <img src="images\ccs.png" alt="CCS-LOGO" class="logo">
        </div>
        <div class="button-login">
            <button type="button" class="btn-log" data-bs-toggle="dropdown" aria-expanded="false">
                Login
            </button>
            <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#adminModal">Admin</a></li>
            </ul>
        </div>
    </header>
    <br><br>

    <div class="container">
        <div class="labels">
            <h1 class="ipcr">Individual Performance Commitment and <br>Review System</h1>
            <br>
            <p class="caption">Individual Performance Commitment and Review (IPCR) Form.
                Refers to the performance management tool required to be submitted by an employee every semester.
                It contains his/her commitments to the attainment of office goals and objectives and accomplishments at the end of the rating period.
            </p>
            <hr>
            <h1>I/P/C/R - System</h1>
        </div>
    </div>

    <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">Admin Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="adminUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="adminUsername" name="admin_username" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="adminPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="adminPassword" name="admin_password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary" name="admin_submit">Login</button>
                </form>
                <?php
                if (isset($error_message)) {
                    echo '<p class="error-message">' . $error_message . '</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>



    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="forgotEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="forgotEmail" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
