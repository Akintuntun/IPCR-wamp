<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    table{

        width: 100%;

    }

    th {
        width: 50%;
        background-color: rgb(255,255,102);
        font-size: 30px;
        padding: 20px;
    }

    td {
        width: 50%;
        background-color: white;
        font-size: 25px;
        text-align: center;
        padding: 20px;
    }
</style>

<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "Akisophiekingking";
        $dbname = "login_credentials";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the 'faculty_credentials' table
        $sql = "SELECT username FROM faculty_credentials";
        $result = $conn->query($sql);
    ?>

    <table>
        <thead>
            <tr>
                <th>NAMES</th>
                <th>IPCR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Display fetched data in the table
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td></td>"; // IPCR column is empty as per your request
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No records found.</td></tr>";
                }

                // Close the connection
                $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>
