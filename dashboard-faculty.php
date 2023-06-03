<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dashboard-facul.css">
    <title>DASHBOARD</title>
</head>

<style>
    body {
        background-color: white;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-align: center;">Employee Performance Dashboard</h1>
        <div class="body">
            <div class="profile">
                <img src="images/account-logo.png" alt="missing" class="opt">
                <div class="progress-bar">
                    <div class="progress" style="width: <?php echo 76; ?>%;"></div>
                </div>
                <h1>Juan Dela Cruz</h1>
            </div>
            <div class="bar-achievements">
                <h2>Achievements</h2>
                <div class="bar-chart">
                    <div class="bar" style="width: <?php echo 60; ?>%;">Leadership</div>
                    <div class="bar" style="width: <?php echo 80; ?>%;">Disciples</div>
                    <div class="bar" style="width: <?php echo 90; ?>%;">Innovative</div>
                    <div class="bar" style="width: <?php echo 70; ?>%;">DSC</div>
                </div>
            </div>
            <div class="bar-skills">
                <h2>Skills</h2>
                <div class="bar-chart">
                    <div class="bar" style="width: <?php echo 75; ?>%;">Work Quality</div>
                    <div class="bar" style="width: <?php echo 85; ?>%;">Work Efficiency</div>
                    <div class="bar" style="width: <?php echo 95; ?>%;">Improvement</div>
                    <div class="bar" style="width: <?php echo 65; ?>%;">Target Achieved</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
