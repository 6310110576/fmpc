<?php 
include "connectDB.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userlevel = $_POST['userlevel'];

    $hash_password = md5($password);

    // $sql = "INSERT INTO `fmpc_user`(username,password,Ulevel) VALUES('$username','$hash_password',$userlevel)";
    // $result=mysqli_query($conn,$sql);
    $stmt = mysqli_prepare($conn, "INSERT INTO `fmpc_user` (`username`, `password`, `userlevel`) VALUES (?,?,?)");
    mysqli_stmt_bind_param($stmt, "sss", $username, $hash_password, $userlevel);
    mysqli_stmt_execute($stmt);
    if(mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('$hash_password');</script>";
        echo "<script>window.location='../login.php';</script>";
    }
    else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูล');</script>";
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>