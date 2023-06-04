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
    <title>DEAN HOMEPAGE</title>
    <link rel="stylesheet" href="CSS\dean.css">
    
</head>

<style>
    
    body{

        background-image: url(images/image.jpg);

    }

</style>

<body>
<header>
<?php
    session_start();

    
    // Check if the session variable is set
    if (!isset($_SESSION['dean_username'])) {
        // Redirect to the login page if the session variable is not set
        header("Location: login-page.php");
        exit();
    }

    $dean_username = $_SESSION['dean_username'];

    $servername = "localhost";
    $username = "root";
    $password = "Akisophiekingking";
    $database = "login_credentials";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT firstname, middlename, lastname FROM dean_credentials WHERE username = '$dean_username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstName = $row['firstname'];
        $middleName = $row['middlename'];
        $lastName = $row['lastname'];

        $fullName = $firstName . ' ' . $middleName . ' ' . $lastName;
    } else {
        $fullName = "Juan Dela Cruz";
    }

    mysqli_close($conn);
?>

<header>
    <div class="header">
        <img src="images/lspu-logo.png" alt="LSPU-LOGO" class="logo">
        <div class="label">
            <h1 class="title"><i>Laguna State Polytechnic University San Pablo City Campus</i></h1>
            <h2 class="college">College of Computer Studies</h2>
        </div>
        <img src="images/ccs.png" alt="CCS-LOGO" class="logo">
    </div>
    <div class="head-w">
        <img src="images/opt.png" alt="" class="opt">
        
        <div class="account">
            <h3 class="name"><?php echo $fullName; ?></h3>
            <div class="dropdown">
                <img src="images/account-logo.png" alt="" class="opt" onclick="toggleDropdown()">
                <div class="dropdown-menu" id="dropdownMenu">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">LOGOUT</a>
                </div>
            </div>
         </div>
        
    </div>
</header>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
</div>
    
    <div class="main-body">
        <div class="menu">
            <ul class="options">
                <li onclick="changeFrame('dashboard-dean.php')">Dashboard</li>
                <li onclick="changeFrame('ipcr-list.php')">IPCR List</li>
                <li onclick="changeFrame('IPMT.php')">IPMT</li>
                <li onclick="changeFrame('system-feedback-dean.php')">System Feedback</li>
            </ul>
        </div>
        <div class="frame">
            <iframe id="frameContent" src="" frameborder="0"></iframe>
        </div>
    </div>
    </div>

    <script>
        function changeFrame(url) {
            var frameContent = document.getElementById('frameContent');
            frameContent.src = url;

            var options = document.querySelectorAll('.options li');
            options.forEach(function (option) {
                if (option.getAttribute('onclick') === "changeFrame('" + url + "')") {
                    option.style.backgroundColor = 'gray';
                } else {
                    option.style.backgroundColor = 'black';
                }
            });
        }

        function toggleDropdown() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('show');
        }

        function logout() {
            window.location.href = "index.php";
        }
    </script>

</body>
</html>
