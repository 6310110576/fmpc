<?php 
include "connectDB.php";
$userID = $_POST["userid"];
$name = $_POST["pcname"];
$case = $_POST["case"];
$cpu = $_POST["cpu"];
$mainboard = $_POST["mainboard"];
$ram = $_POST["ram"];
$hdd = $_POST["hdd"];
$ssd = $_POST["ssd"];
$monitor = $_POST["monitor"];
$vga = $_POST["vga"];
$ups = $_POST["ups"];
$printer = $_POST["printer"];
$mouse = $_POST["mouse"];
$keyboard = $_POST["keyboard"];
$os = $_POST["os"];
$license = $_POST["license"];
$location = $_POST["location"];
$user = $_POST["user"];
$etc = $_POST["etc"];

$sql = "INSERT INTO fmpc_computer (cpuid,cpname,cpcase,cpcpu,cpmainboard,cpram,cphdd,cpssd,cpmonitor,cpvga,cpups,cpprinter,cpmouse,cpkeyboard,cpos,cposlc,cplocation,cpuser,cpetc) 
       VALUES('$userID','$name','$case','$cpu','$mainboard','$ram','$hdd','$ssd','$monitor','$vga','$ups','$printer','$mouse','$keyboard','$os','$license','$location','$user','$etc')";
$result = mysqli_query($conn,$sql);
if($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='../home.php';</script>";
}
else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูล');</script>";
}
mysqli_close($conn);
?>