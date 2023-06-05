<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPCR List</title>
</head>

<style>

    a {
        text-decoration: none;
    }
    h1 {
        text-align: center;
        padding: 150px;
        background-color: rgb(255, 255, 204);
        margin: 0;
    }
    
    table {
        margin: 0px;
        background-color: white;
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black; /* Add this line to add the border */
        text-align: center;
        font-size: 25px;
        padding: 10px;
    }

    th {
        font-size: 30px;
    }
</style>

<body>
    <h1>INDIVIDUAL PERFORMANCE COMMITMENT and REVIEW</h1>

    <table>
        <tr>
            <th>NAMES</th>
            <th>STATUS</th>
            <th>IPCR</th>
        </tr>
        <?php
        // Assuming you have a database connection and a table named "faculty_credentials" with a column "username"

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "Akisophiekingking";
        $dbname = "login_credentials";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query the database to retrieve the data

        $sql = "SELECT firstname, middlename, lastname FROM faculty_credentials";
        $result = $conn->query($sql);

        if ($result === false) {
          die("Query execution failed: " . $conn->error);
        }

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $name = $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . "</td>";
            ?>
                <tr>
                    <td><a href="ipcr_dean.php"><?php echo $name; ?></a></td>
                    <td>Pending</td>
                    <td>Download File</td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='1'>No data available</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>
</html>
