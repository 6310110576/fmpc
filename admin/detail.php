  <?php 
include 'db/connectDB.php';
$uid=$_GET['id'];
$sql = "SELECT * FROM `fmpc_computer` WHERE `cpuid`='$uid'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result)
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/detail.css">
</head>
<body> 
<div class="head">
        <img src="img/logofm.png" alt="Fm-logo" width="190px" height="70px">
        <h1>แบบฟอร์มกรอกข้อมูล</h1>
        <a href="edit.php?id=<?=$row['cpuid']?>" id="btn_e">แก้ไขข้อมูล</a>
        <a href="home.php" id="btn_a">กลับสูู่หน้าหลัก</a>
        
</div>


   <div class="bottom_h"> 
   <table class="table table-dark table-striped" id="table_h" style="width: 80%;">
        <tr style="text-align: center;">
            <th>UserID</th>
            <th>PCName</th>
            <th>Location</th>
            <th>User</th>
        </tr>
            <?php 
            $sql = "SELECT * FROM `fmpc_computer` WHERE `cpuid`='$uid'";
            $result = mysqli_query($conn,$sql); 
            while($row=mysqli_fetch_assoc($result)){
            ?> 
                    <td><?=$row['cpuid']?></td>
                    <td><?=$row['cpname']?></td>
                    <td><?=$row['cplocation']?></td>
                    <td><?=$row['cpuser']?></td> 
                </tr>
    
    </table>

 
    
    </div>
    <div class="content">
        <div class="content_left">
            <ul style="border-bottom: 2px solid black; margin-top: 12px;">
                <li style="border: none; font-size: 18px;"><b>Case</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpcase']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>CPU</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpcpu']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>Mainboard</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpmainboard']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>RAM</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpram']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>HDD</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cphdd']?></li>
                </ul>
            </ul >
            <ul style="padding-top: -10px;">
                <li style="border: none; font-size: 18px;"><b>SSD</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpssd']?></li>
            </ul>
            </ul>

        </div>
        <div class="content_center">
            <ul style="border-bottom: 2px solid black; margin-top: 12px;" >
                <li style="border: none; font-size: 18px;"><b>Monitor</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpmonitor']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>VGA</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpvga']?></li>
                </ul>
            </ul>
            
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>UPS</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpups']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>Printer</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpprinter']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>Mouse</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpmouse']?></li>
                </ul>
            </ul>
            <ul style="padding-top: 5px;">
                <li style="border: none; font-size: 18px;"><b>keyboard</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpkeyboard']?></li>
                </ul>
            </ul>

        </div>
        <div class="content_right">
            <ul style="border-bottom: 2px solid black; margin-top: 12px;">
                <li style="border: none; font-size: 18px;"><b>OS</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpos']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>License</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cposlc']?></li>
                </ul>
            </ul>
            <ul style="border-bottom: 2px solid black;">
                <li style="border: none; font-size: 18px;"><b>User</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpuser']?></li>
                </ul>
            </ul>
            <ul>
                <li style="border: none; font-size: 18px;"><b>อื่นๆ</b></li>
                <ul>
                    <li style="border: none;"><?=$row['cpetc']?></li>
                </ul>
            </ul>
        </div>

    </div>
    <?php 
    }
        mysqli_close($conn);
    ?>    
</body>
</html>
