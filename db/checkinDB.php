<?php
include "connectDB.php";
// Check the database connection
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password using MD5
    $hashedPassword = md5($password);

    // Prepare a SQL statement to fetch the user's information
    $stmt = mysqli_prepare($conn, "SELECT * FROM fmpc_user WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];
        $userLevel = $row['userlevel'];

        // Compare the hashed password with the stored password
        if ($hashedPassword === $storedPassword) {
            // Password is correct
            session_start();
            $_SESSION['username'] = $username;

            if ($userLevel === 'admin') {
                // Admin user, redirect to admin page
                header("Location: ../admin/home.php");
                exit();
            } else {
                // Regular user, redirect to protected page
                header("Location: ../user/home.php");
                exit();
            }
        } else {
            // Password is incorrect
            echo "Invalid password.";
        }
    } else {
        // User does not exist
        echo "Invalid username.";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
