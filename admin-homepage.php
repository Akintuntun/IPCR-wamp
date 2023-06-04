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
    <title>ADMIN HOMEPAGE</title>
    <link rel="stylesheet" href="CSS\admin-homepage.css">
    
</head>

<style>
    
    body{

        background-image: url(images/image.jpg);

    }

</style>

<body>
<header>

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
            <h3 class="name">ADMIN</h3>
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
                <li onclick="changeFrame('list-accounts.php')">List of Accounts</li>
                <li onclick="changeFrame('download-ipcr.php')">Download IPCR</li>
                <li onclick="changeFrame('review-feedback.php')">Review Feedback</li>
                <li onclick="changeFrame('create.php')">Create User Account</li>
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
