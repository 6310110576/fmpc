<?php 
include 'connectDB.php';
//ประกาศตัวแปร รับค่าจากตัวแปร
$uid = $_POST['userid'];
$name = $_POST['pcname'];
$case = $_POST['case'];
$cpu = $_POST['cpu'];
$mainboard = $_POST['mainboard'];
$ram = $_POST['ram'];
$hdd = $_POST['hdd'];
$ssd = $_POST['ssd'];
$monitor = $_POST['monitor'];
$vga = $_POST['vga'];
$ups = $_POST['ups'];
$printer = $_POST['printer'];
$mouse = $_POST['mouse'];
$keyboard = $_POST['keyboard'];
$os =  $_POST['os'];
$license = $_POST['license'];
$location =  $_POST['location'];
$user = $_POST['user'];
$etc = $_POST['etc'];

//update data;
$sql = "UPDATE `fmpc_computer` SET 
        `cpname`='$name', 
        `cpcase`='$case', 
        `cpcpu`='$cpu', 
        `cpmainboard`='$mainboard', 
        `cpram`='$ram', 
        `cphdd`='$hdd', 
        `cpssd`='$ssd', 
        `cpmonitor`='$monitor', 
        `cpvga`='$vga', 
        `cpups`='$ups', 
        `cpprinter`='$printer', 
        `cpmouse`='$mouse', 
        `cpkeyboard`='$keyboard', 
        `cpos`='$os', 
        `cposlc`='$license', 
        `cplocation`='$location', 
        `cpuser`='$user', 
        `cpetc`='$etc'     
        WHERE  `cpuid`=$uid;";
$result = mysqli_query($conn,$sql) or die("
          Error in sql: $sql" . mysqli_error($conn));

if($result) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='../home.php';</script>";
}
else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
?>