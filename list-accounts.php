<!DOCTYPE html>
<html>
<head>
  <title>Account List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>

    #label{

        font-size: 40px;
        text-align: center;

    }

    #names{

        font-size: 35px;

    }

    td{

        font-size: 30px;

    }

</style>

<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th id="label">Account List</th>
        </tr>
        <tr>
            <th id="names">Names</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "Akisophiekingking";
        $database = "login_credentials";
        
        // Establish a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve the usernames from the dean_credentials table
        $sql = "SELECT username FROM dean_credentials";
        $result = $conn->query($sql);

        if ($result === false) {
          die("Query execution failed: " . $conn->error);
        }

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='1'>No accounts found in dean_credentials.</td></tr>";
        }

        // Retrieve the usernames from the faculty_credentials table
        $sql = "SELECT username FROM faculty_credentials";
        $result = $conn->query($sql);

        if ($result === false) {
          die("Query execution failed: " . $conn->error);
        }

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='1'>No accounts found in faculty_credentials.</td></tr>";
        }

        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
