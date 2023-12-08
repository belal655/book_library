<?php
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'internet5');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to check if the username already exists
function isUsernameExists($db, $username) {
    $checkUserQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($db, $checkUserQuery);

    return mysqli_num_rows($result) > 0;
}

if (isset($_POST['register'])) {
    $Username = mysqli_real_escape_string($db, $_POST['UN']);
    $Email = mysqli_real_escape_string($db, $_POST['em']);
    $Password1 = mysqli_real_escape_string($db, $_POST['pw1']);
    $Password2 = mysqli_real_escape_string($db, $_POST['pw2']);

    // Simple validation to check if input fields are not empty
    if (empty($Username) || empty($Email) || empty($Password1) || empty($Password2)) {
        die("Please fill in all the fields");
    }

    // Check if passwords match
    if ($Password1 !== $Password2) {
        die("Passwords do not match");
    }

    // Check if the username is already registered
    if (isUsernameExists($db, $Username)) {
        die("Username is already taken. Please choose another username.");
    }

    // Insert into the database using prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($db, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $Username, $Email, $Password1);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registration successful";
    } else {
        echo "Error: " . mysqli_error($db);
    }

    mysqli_stmt_close($stmt);
}


if (isset($_POST['login'])) {
    // ... (your existing code for login)

    if ($EnteredPassword === $storedPassword) {
        // Password is correct, user is authenticated
        echo "Login successful";
    } else {
        // Password is incorrect
        die("Incorrect password");
    }
}

mysqli_close($db);
?>