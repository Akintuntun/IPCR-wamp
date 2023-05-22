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
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php
        // Database credentials
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "login_credentials";

        // Create a connection
        $connection = mysqli_connect($servername, $username, $password, $database);

        // Check if the connection was successful
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the entered credentials from the login form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // SQL query to check the dean credentials
            $query = "SELECT * FROM dean_table WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) == 1) {
                // Dean credentials are correct, redirect to dean homepage
                header("Location: dean-homepage.php");
                exit();
            } else {
                // Invalid dean credentials, display an error message
                $error_message = "Invalid credentials. Please try again.";
            }
        }

        // Close the connection when you're done
        mysqli_close($connection);
        ?>

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
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deanLoginModal">Dean</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#facultyLoginModal">Faculty</a></li>
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

    <footer>
        <div class="foot">
            <input type="button" value="Admin" class="btn-admin" onclick="window.location.href='admin.php'">
        </div>
    </footer>

    <!--LOGIN POPUP ni Dean --> 
    <div class="modal fade" id="deanLoginModal" tabindex="-1" aria-labelledby="deanLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deanLoginModalLabel">Dean Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="mb-3">
                            <label for="deanUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="deanUsername" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="deanPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="deanPassword" name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
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

    <!--LOGIN POPUP ni Faculty --> 
    <div class="modal fade" id="facultyLoginModal" tabindex="-1" aria-labelledby="facultyLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="facultyLoginModalLabel">Faculty Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="facultyUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="facultyUsername" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <label for="facultyPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="facultyPassword" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
