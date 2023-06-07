<?php

// Process password change form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the password change form
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validate and sanitize user input

    // Connect to your database
    include "../db/connectDB.php";

    // Retrieve the current password from the database for the logged-in user
    session_start();
    $username = $_SESSION["username"];
    $stmt = mysqli_prepare($conn, "SELECT password FROM fmpc_user WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Verify the current password
    if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $hashedPassword);
        mysqli_stmt_fetch($stmt);
        if (password_verify($currentPassword, $hashedPassword)) {
            // Validate the new password and confirm password
            if ($newPassword == $confirmPassword) {
                // Update the password in the database
                $hashedNewPassword = md5($newPassword); // ที่นี่คุณใช้ฟังก์ชัน md5 สำหรับแฮชรหัสผ่าน
                $updateStmt = mysqli_prepare($conn, "UPDATE fmpc_user SET `password` = ? WHERE `username` = ?");
                mysqli_stmt_bind_param($updateStmt, "ss", $hashedNewPassword, $username);
                mysqli_stmt_execute($updateStmt);

                // Display a success message
                $successMessage = "Password changed successfully.";
            } else {
                $errorMessage = "New password and confirm password do not match.";
            }
        } else {
            $errorMessage = "Current password is incorrect.";
        }
    }

    // Close prepared statements and database connection
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($updateStmt);
    mysqli_close($conn);
}
?>

<!-- Display success message if password changed successfully -->
<?php if (isset($successMessage)) { ?>
    <p><?php echo $successMessage; ?></p>
<?php } ?>

<!-- Display error message if an error occurred -->
<?php if (isset($errorMessage)) { ?>
    <p><?php echo $errorMessage; ?></p>
<?php } ?>

