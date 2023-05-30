<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey Form</title>
    <link rel="stylesheet" href="CSS\system-dean.css">
</head>
    <style>

        body{

            background-image: url(images/image.jpg);

        }

    </style>
<body>
    <form action="submit_survey.php" method="POST">
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
                    <input type="radio" name="question-accessibility" value="5" required>
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
        <textarea id="comments" name="comments" rows="8" cols="116"></textarea>
        <br><br>
        <button type="submit" id="sub">Submit</button>
           
        
    </form>

</body>

</html>