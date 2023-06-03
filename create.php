<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Creation Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Istok+Web&display=swap');

        body {
            background-color: rgba(255, 255, 255, 0.5);
            margin: 0;
            padding: 0;
            font-family: 'Istok Web', sans-serif;
        }

        .header {
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }

        .btn {
            background-color: black;
            border: solid white 2px;
            color: white;
            padding: 5px;
            font-size: 20px;
        }

        .lbl {
            font-size: 17px;
            display: inline-block;
            width: 120px;
            text-align: right;
            margin-right: 200px;
            font-weight: bold;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            margin-left: 100px;
        }

        .input-field {
            width: 300px;
            padding: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.5);
            border: solid white 2px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Add New User</h1>
    </div>
    <div class="form-container">
    <h3>Create a brand new user and add them to this site</h3>
        <form action="process_form.php" method="POST">
            
            <label for="username" class="lbl">Username:</label>
            <input type="text" id="username" name="username" required class="input-field"><br><br>

            <label for="email" class="lbl">Email:</label>
            <input type="email" id="email" name="email" required class="input-field"><br><br>

            <label for="firstname" class="lbl">First Name:</label>
            <input type="text" id="firstname" name="firstname" required class="input-field"><br><br>

            <label for="middlename" class="lbl">Middle Name:</label>
            <input type="text" id="middlename" name="middlename" class="input-field"><br><br>

            <label for="lastname" class="lbl">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required class="input-field"><br><br>

            <label for="password" class="lbl">Password:</label>
            <input type="password" id="password" name="password" required class="input-field"><br><br>

            <label for="role" class="lbl">Role:</label>
            <select id="role" name="role" required class="input-field">
                <option value="faculty">Faculty</option>
                <option value="dean">Dean</option>
            </select><br><br>

            <input type="submit" value="Add New User" class="btn">
        </form>
    </div>
</body>
</html>
