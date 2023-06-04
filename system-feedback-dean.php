<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey Form</title>
    <link rel="stylesheet" href="CSS\system.css">
</head>
    <style>

        body{

            background-image: url(images/image.jpg);

        }

    </style>
<body>
<?php
// Sanitize user input to prevent SQL injection
function sanitizeInput($con, $input)
{
    $input = mysqli_real_escape_string($con, $input);
    return $input;
}

// Connect to the database
$con = mysqli_connect("localhost", "root", "Akisophiekingking", "login_credentials");

// Check if the connection was successful
if (!$con) {
    die("Error: Could not connect to the database");
}

// Process and store the survey responses
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process usability responses
    $usability = array();
    for ($i = 1; $i <= 5; $i++) {
        $question = "question" . $i . "-Usability";
        if (isset($_POST[$question])) {
            $usability[$i] = sanitizeInput($con, $_POST[$question]);
        }
    }

    // Process accessibility responses
    $accessibility = array();
    for ($i = 1; $i <= 4; $i++) {
        $question = "question" . $i . "-accessibility";
        if (isset($_POST[$question])) {
            $accessibility[$i] = sanitizeInput($con, $_POST[$question]);
        }
    }

    // Process efficiency responses
    $efficiency = array();
    for ($i = 1; $i <= 4; $i++) {
        $question = "question" . $i . "-efficiency";
        if (isset($_POST[$question])) {
            $efficiency[$i] = sanitizeInput($con, $_POST[$question]);
        }
    }

    // Process effectiveness responses
    $effectiveness = array();
    for ($i = 1; $i <= 4; $i++) {
        $question = "question" . $i . "-effectiveness";
        if (isset($_POST[$question])) {
            $effectiveness[$i] = sanitizeInput($con, $_POST[$question]);
        }
    }

    // Process user satisfaction responses
    $userSatisfaction = array();
    for ($i = 1; $i <= 5; $i++) {
        $question = "question" . $i . "-user-satisfaction";
        if (isset($_POST[$question])) {
            $userSatisfaction[$i] = sanitizeInput($con, $_POST[$question]);
        }
    }

    // Process additional comments
    $comments = isset($_POST['comments']) ? sanitizeInput($con, $_POST['comments']) : '';

    // Calculate the sum for each category
    $usabilitySum = array_sum($usability);
    $accessibilitySum = array_sum($accessibility);
    $efficiencySum = array_sum($efficiency);
    $effectivenessSum = array_sum($effectiveness);
    $userSatisfactionSum = array_sum($userSatisfaction);

    // Prepare the INSERT statement for survey data
    $surveyStmt = mysqli_prepare($con, "INSERT INTO survey_dean (usability, accessibility, efficiency, effectiveness, user_satisfaction) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($surveyStmt, "iiiii", $usabilitySum, $accessibilitySum, $efficiencySum, $effectivenessSum, $userSatisfactionSum);

    // Execute the INSERT statement for survey data
    if (mysqli_stmt_execute($surveyStmt)) {
        // Retrieve the auto-generated ID of the survey entry
        $surveyID = mysqli_insert_id($con);

        // Prepare the INSERT statement for comments
        $commentsStmt = mysqli_prepare($con, "INSERT INTO survey_comments (survey_id, comment) VALUES (?, ?)");
        mysqli_stmt_bind_param($commentsStmt, "is", $surveyID, $comments);

        // Execute the INSERT statement for comments
        if (mysqli_stmt_execute($commentsStmt)) {
            echo "Survey and comment submitted successfully";
        } else {
            echo "Error inserting comment: " . mysqli_error($con);
        }

        // Close the comments statement
        mysqli_stmt_close($commentsStmt);
    } else {
        echo "Error inserting survey: " . mysqli_error($con);
    }

    // Close the survey statement and database connection
    mysqli_stmt_close($surveyStmt);
    mysqli_close($con);
}
?>




    <form action="system-feedback-dean.php" method="POST">
        <table>
            <tr>
                <th>I. Usability</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <tr>
                <td>1. The IPCR system is easy to navigate and use.</td>
                <td>
                    <input type="radio" name="question1-Usability" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question1-Usability" value="2">
                </td>
                <td>
                    <input type="radio" name="question1-Usability" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question1-Usability" value="4">
                </td>
                <td>
                    <input type="radio" name="question1-Usability" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>2. The system's features and functionalities are well-organized and logically structured.</td>
                <td>
                    <input type="radio" name="question2-Usability" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question2-Usability" value="2">
                </td>
                <td>
                    <input type="radio" name="question2-Usability" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question2-Usability" value="4">
                </td>
                <td>
                    <input type="radio" name="question2-Usability" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>3. The IPCR system minimizes the need for manual workarounds or complex procedures.</td>
                <td>
                    <input type="radio" name="question3-Usability" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question3-Usability" value="2">
                </td>
                <td>
                    <input type="radio" name="question3-Usability" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question3-Usability" value="4">
                </td>
                <td>
                    <input type="radio" name="question3-Usability" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>4. Tasks can be completed quickly and effortlessly using the IPCR system.</td>
                <td>
                    <input type="radio" name="question4-Usability" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question4-Usability" value="2">
                </td>
                <td>
                    <input type="radio" name="question4-Usability" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question4-Usability" value="4">
                </td>
                <td>
                    <input type="radio" name="question4-Usability" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>5. The interface design of the IPCR system is intuitive and user-friendly.</td>
                <td>
                    <input type="radio" name="question5-Usability" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question5-Usability" value="2">
                </td>
                <td>
                    <input type="radio" name="question5-Usability" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question5-Usability" value="4">
                </td>
                <td>
                    <input type="radio" name="question5-Usability" value="5" required>
                </td>     
            </tr>
            

            <tr>
                <th>II. Accessibility</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <tr>
                <td>1. The system's response time was consistently fast, minimizing waiting periods and ensuring efficient workflow.</td>
                <td>
                    <input type="radio" name="question1-accessibility" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question1-accessibility" value="2">
                </td>
                <td>
                    <input type="radio" name="question1-accessibility" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question1-accessibility" value="4">
                </td>
                <td>
                    <input type="radio" name="question1-accessibility" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>2. The system's security measures, such as user authentication and data encryption, instilled confidence in the protection of sensitive information.</td>
                <td>
                    <input type="radio" name="question2-accessibility" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question2-accessibility" value="2">
                </td>
                <td>
                    <input type="radio" name="question2-accessibility" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question2-accessibility" value="4">
                </td>
                <td>
                    <input type="radio" name="question2-accessibility" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>3. The system's interface was user-friendly, allowing for intuitive navigation and interaction.</td>
                <td>
                    <input type="radio" name="question3-accessibility" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question3-accessibility" value="2">
                </td>
                <td>
                    <input type="radio" name="question3-accessibility" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question3-accessibility" value="4">
                </td>
                <td>
                    <input type="radio" name="question3-accessibility" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>4. The IPCR system provided easy and convenient access to all necessary features and functions.</td>
                <td>
                    <input type="radio" name="question4-accessibility" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question4-accessibility" value="2">
                </td>
                <td>
                    <input type="radio" name="question4-accessibility" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question4-accessibility" value="4">
                </td>
                <td>
                    <input type="radio" name="question4-accessibility" value="5" required>
                </td>     
            </tr>
    


            <tr>
                <th>III. Efficiency</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <tr>
                <td>1. The system's secure data storage and access controls gave us peace of mind regarding confidentiality and data protection.</td>
                <td>
                    <input type="radio" name="question1-efficiency" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question1-efficiency" value="2">
                </td>
                <td>
                    <input type="radio" name="question1-efficiency" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question1-efficiency" value="4">
                </td>
                <td>
                    <input type="radio" name="question1-efficiency" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>2. The IPCR system provided comprehensive reporting features, enabling us to track and analyze performance metrics effectively.</td>
                <td>
                    <input type="radio" name="question2-efficiency" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question2-efficiency" value="2">
                </td>
                <td>
                    <input type="radio" name="question2-efficiency" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question2-efficiency" value="4">
                </td>
                <td>
                    <input type="radio" name="question2-efficiency" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>3. With real-time notifications and alerts, the system kept us updated on important developments, ensuring timely action.</td>
                <td>
                    <input type="radio" name="question3-efficiency" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question3-efficiency" value="2">
                </td>
                <td>
                    <input type="radio" name="question3-efficiency" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question3-efficiency" value="4">
                </td>
                <td>
                    <input type="radio" name="question3-efficiency" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>4. The system's intuitive interface made it easy to navigate and perform tasks efficiently.</td>
                <td>
                    <input type="radio" name="question4-efficiency" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question4-efficiency" value="2">
                </td>
                <td>
                    <input type="radio" name="question4-efficiency" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question4-efficiency" value="4">
                </td>
                <td>
                    <input type="radio" name="question4-efficiency" value="5" required>
                </td>     
            </tr>


            <tr>
                <th>IV. Effectiveness</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <tr>
                <td>1. The IPCR System's comprehensive reporting capabilities have provided valuable insights and enabled us to identify areas for improvement.</td>
                <td>
                    <input type="radio" name="question1-effectiveness" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question1-effectiveness" value="2">
                </td>
                <td>
                    <input type="radio" name="question1-effectiveness" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question1-effectiveness" value="4">
                </td>
                <td>
                    <input type="radio" name="question1-effectiveness" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>2. The availability of real-time data and analytics through the IPCR System has greatly facilitated informed decision-making at all levels.</td>
                <td>
                    <input type="radio" name="question2-effectiveness" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question2-effectiveness" value="2">
                </td>
                <td>
                    <input type="radio" name="question2-effectiveness" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question2-effectiveness" value="4">
                </td>
                <td>
                    <input type="radio" name="question2-effectiveness" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>3. Employees find the IPCR System user-friendly and easy to navigate, enhancing their overall productivity.</td>
                <td>
                    <input type="radio" name="question3-effectiveness" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question3-effectiveness" value="2">
                </td>
                <td>
                    <input type="radio" name="question3-effectiveness" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question3-effectiveness" value="4">
                </td>
                <td>
                    <input type="radio" name="question3-effectiveness" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>4. The IPCR System has significantly improved the efficiency and accuracy of our workflow processes.</td>
                <td>
                    <input type="radio" name="question4-effectiveness" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question4-effectiveness" value="2">
                </td>
                <td>
                    <input type="radio" name="question4-effectiveness" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question4-effectiveness" value="4">
                </td>
                <td>
                    <input type="radio" name="question4-effectiveness" value="5" required>
                </td>     
            </tr>


            <tr>
                <th>V. User satisfaction</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <tr>
                <td>1. Rate your satisfaction with the system's performance and reliability.</td>
                <td>
                    <input type="radio" name="question1-user-satisfaction" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question1-user-satisfaction" value="2">
                </td>
                <td>
                    <input type="radio" name="question1-user-satisfaction" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question1-user-satisfaction" value="4">
                </td>
                <td>
                    <input type="radio" name="question1-user-satisfaction" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>2. How satisfied are you with the system's user interface and design?</td>
                <td>
                    <input type="radio" name="question2-user-satisfaction" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question2-user-satisfaction" value="2">
                </td>
                <td>
                    <input type="radio" name="question2-user-satisfaction" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question2-user-satisfaction" value="4">
                </td>
                <td>
                    <input type="radio" name="question2-user-satisfaction" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>3. Please indicate your level of satisfaction with the system's security measures.</td>
                <td>
                    <input type="radio" name="question3-user-satisfaction" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question3-user-satisfaction" value="2">
                </td>
                <td>
                    <input type="radio" name="question3-user-satisfaction" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question3-user-satisfaction" value="4">
                </td>
                <td>
                    <input type="radio" name="question3-user-satisfaction" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>4. Please indicate your level of satisfaction with the system's features and functionality.</td>
                <td>
                    <input type="radio" name="question4-user-satisfaction" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question4-user-satisfaction" value="2">
                </td>
                <td>
                    <input type="radio" name="question4-user-satisfaction" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question4-user-satisfaction" value="4">
                </td>
                <td>
                    <input type="radio" name="question4-user-satisfaction" value="5" required>
                </td>     
            </tr>
            <tr>
                <td>5. Indicate your level of satisfaction with the system's scalability and flexibility.</td>
                <td>
                    <input type="radio" name="question5-user-satisfaction" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question5-user-satisfaction" value="2">
                </td>
                <td>
                    <input type="radio" name="question5-user-satisfaction" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question5-user-satisfaction" value="4">
                </td>
                <td>
                    <input type="radio" name="question5-user-satisfaction" value="5" required>
                </td>     
            </tr>

            <tr>
                <td>6. How satisfied are you with the system's ease of use?</td>
                <td>
                    <input type="radio" name="question6-user-satisfaction" value="1" required>
                </td>
                <td>
                    <input type="radio" name="question6-user-satisfaction" value="2">
                </td>
                <td>
                    <input type="radio" name="question6-user-satisfaction" value="3" required>
                </td>
                <td>
                    <input type="radio" name="question6-user-satisfaction" value="4">
                </td>
                <td>
                    <input type="radio" name="question6-user-satisfaction" value="5" required>
                </td>     
            </tr>

        </table>

        <br>
        <h1>Additional Comments:</h1>            
        <textarea id="comments" rows="8" cols="89"></textarea>
        <br><br>
        <input type="submit" id="sub" value="Submit"></button>
           
        
    </form>

</body>

</html>
