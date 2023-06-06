<?php 
include 'db/connectDB.php';
$uid = $_GET['id'];
$sql = "SELECT * FROM fmpc_computer WHERE cpuid='$uid'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;500&family=Taviraj&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
<div class="head">
        <img src="img/logofm.png" alt="Fm-logo" width="190px" height="70px">
        <h1>แบบฟอร์มกรอกข้อมูล</h1>
        
</div>
<div class="form">
        <div class="form-left">
            <form action="db/updatetoDB.php" method="post">
                    user ID  &ensp;<b>:</b><input name="userid"type="text"  class="inp-box" value=<?=$row['cpuid']?>><br>
                    PC name  &ensp;<b>:</b><input name="pcname" type="text" class="inp-box" value=<?=$row['cpname']?>><br>
                    Case  &emsp;&ensp;&nbsp;&ensp;<b>:</b><input name="case" type="text" class="inp-box" value=<?=$row['cpcase']?>><br>
                    CPU  &emsp;&ensp;&nbsp;&nbsp;&ensp;<b>:</b><input name="cpu" type="text" class="inp-box" value=<?=$row['cpcpu']?>><br>
                    Mainboard  <b>:</b><input name="mainboard" type="text" class="inp-box" value=<?=$row['cpmainboard']?>><br>
                    RAM  &emsp;&emsp;&ensp;<b>:</b><input name="ram" type="text" class="inp-box" value=<?=$row['cpram']?>><br>
                    HDD  &emsp;&emsp;&ensp;<b>:</b><input name="hdd" type="text" class="inp-box" value=<?=$row['cphdd']?>><br>
                    SSD  &emsp;&emsp;&ensp;<b>:</b><input name="ssd" type="text" class="inp-box" value=<?=$row['cpssd']?>><br>
                    Monitor  &emsp;&nbsp;<b>:</b><input name="monitor" type="text" class="inp-box" value=<?=$row['cpmonitor']?>><br>
                    VGA  &emsp;&emsp;&ensp;<b>:</b><input name="vga" type="text" class="inp-box" value=<?=$row['cpvga']?>>

        </div>
        <div class="form-right">
            
                    UPS  &nbsp;&emsp;&emsp;&ensp;&nbsp;<b>:</b><input name="ups" type="text"class="inp-box" value=<?=$row['cpups']?>><br>
                    Printer  &nbsp;&emsp;&emsp;<b>:</b><input name="printer" type="text" class="inp-box" value=<?=$row['cpprinter']?>><br>
                    Mouse  &nbsp;&emsp;&emsp;<b>:</b><input name="mouse" type="text"class="inp-box" value=<?=$row['cpmouse']?>><br>
                    Keyboard  &nbsp;&nbsp;&nbsp;&nbsp;<b>:</b><input name="keyboard" type="text" class="inp-box" value=<?=$row['cpkeyboard']?>><br>
                    OS  &nbsp;&emsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;<b>:</b><input name="os"type="text" class="inp-box" value=<?=$row['cpos']?>><br>
                    License  &nbsp;&emsp;&ensp;<b>:</b><input name="license" type="text" class="inp-box" value=<?=$row['cposlc']?>><br>
                    ที่ตั้งเครื่อง  &ensp;&nbsp;<b>:</b><input name="location" type="text" class="inp-box" value=<?=$row['cplocation']?>><br>
                    ผู้รับผิดชอบ  &nbsp;<b>:</b><input name="user" type="text" class="inp-box" value=<?=$row['cpuser']?>><br>
                    อื่นๆ  &emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;<b>:</b><input name="etc" type="text" class="inp-box" value=<?=$row['cpetc']?>><br>
                      
        </div>
                    
                    <input type="submit" value="บันทึกข้อมูล" class="btn_su"> 
                    <button  type = "reset" onclick="cancel()" class="btn_ca">ยกเลิก</button>
            </form>  
    </div>
    

<script>
function cancel() {
  alert("ยกเลิกเรียบร้อย");  
  window.location.href = 'home.php'  
}
</script>
    
</body>
</html>