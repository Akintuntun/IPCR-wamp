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
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="faculty.css">
</head>
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
        <div class="head-w">
            <img src="images\opt.png" alt="" class="opt">
            <h2>Juan Dela Cruz</h2>
        </div>
    </header>
    
    <div class="main-body">
        <div class="menu">
            <ul class="options">
                <li onclick="changeFrame('dashboard-faculty.php')">Dashboard</li>
                <li onclick="changeFrame('ipcr-faculty.php')">IPCR</li>
                <li onclick="changeFrame('notification-faculty.php')">Notification</li>
                <li onclick="changeFrame('system-feedback-faculty.php')">System Feedback</li>
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

    </script>

</body>
</html>