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
            padding: 2px;
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
            width: 150px;
            text-align: right;
            margin-right: 20px;
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

        .input-container {
            display: flex;
            align-items: center;
        }

        .checkbox-label {
            margin-left: 10px;
        }
    </style>
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            // Password strength validation
            var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})");
            if (!strongRegex.test(password)) {
                alert("Password must contain at least 8 characters, including uppercase, lowercase, numeric, and special characters.");
                return false;
            }

            return true;
        }

        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var confirmPasswordField = document.getElementById("confirm_password");
            var showPasswordCheckbox = document.getElementById("show_password");
            var showConfirmPasswordCheckbox = document.getElementById("show_confirm_password");

            if (showPasswordCheckbox.checked) {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }

            if (showConfirmPasswordCheckbox.checked) {
                confirmPasswordField.type = "text";
            } else {
                confirmPasswordField.type = "password";
            }
        }
    </script>
</head>
<body>

    <div class="header">
        <h1>Add New User</h1>
    </div>
    <div class="form-container">
        <h3>Create a brand new user and add them to this site</h3>
        <form action="create.php" method="POST" onsubmit="return validateForm();">

            <div class="input-container">
                <label for="firstname" class="lbl">First Name:</label>
                <input type="text" id="firstname" name="firstname" required class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="middlename" class="lbl">Middle Name:</label>
                <input type="text" id="middlename" name="middlename" class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="lastname" class="lbl">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="age" class="lbl">Age:</label>
                <input type="number" id="age" name="age" required class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="contact_number" class="lbl">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" required class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="email" class="lbl">Email:</label>
                <input type="email" id="email" name="email" required class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="username" class="lbl">Username:</label>
                <input type="text" id="username" name="username" required class="input-field">
            </div><br><br>

            <div class="input-container">
                <label for="password" class="lbl">Password:</label>
                <input type="password" id="password" name="password" required class="input-field">
                <input type="checkbox" id="show_password" name="show_password" onchange="togglePasswordVisibility()">
                <label for="show_password" class="checkbox-label">Show Password</label>
            </div><br><br>

            <div class="input-container">
                <label for="confirm_password" class="lbl">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required class="input-field">
                <input type="checkbox" id="show_confirm_password" name="show_confirm_password" onchange="togglePasswordVisibility()">
                <label for="show_confirm_password" class="checkbox-label">Show Password</label>
            </div><br><br>

            <div class="input-container">
                <label for="role" class="lbl">Role:</label>
                <select id="role" name="role" required class="input-field">
                    <option value="faculty">Faculty</option>
                    <option value="dean">Dean</option>
                </select>
            </div><br><br>

            <input type="submit" value="Add New User" class="btn">
        </form>
    </div>
</body>
</html>
