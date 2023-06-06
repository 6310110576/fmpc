<?php
include 'connectDB.php';
$uid = $_GET['id'];
$sql = "DELETE FROM `fmpc_computer` WHERE `cpuid` = '$uid' ";

if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='../home.php';</script>";
    } else {
        echo "<script>alert('ไม่พบข้อมูลที่ต้องการลบ');</script>";
        echo "<script>window.location='../home.php';</script>";
    }
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn);
?>
