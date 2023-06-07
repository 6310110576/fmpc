<?php 
include '../db/connectDB.php';
// $uid=$_GET['id'];
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// Display the protected content
$username = $_SESSION['username'];

// Add your additional content or functionality here

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <title>computer list</title>
    <!--bootstrab CSS-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="detail.css">
    <style>
    #btn_ed {
    height: 2.5rem;
    width: 8rem;
    margin-top: 1.5rem;
    text-align: center;
    margin-left: 2rem;
    border-radius: 5px;
    color: #273746;
    background-color: #E74C3C;
    padding-top: 8px;
    text-decoration: none;
    font-family: Geneva;
    }
    #table_h {
        text-align: center;
        margin-left: auto;
        margin-right: auto;


    }
    .bottom_h {
        margin-top: 4px;
        height: 89px;
        border-bottom: 2px solid black;
        background-color: #F2F3F4;
    }
    .content {
        height: 32.8rem;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;

    }
    .content_left {
        height: max-content;
        width: 30rem;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        margin: 0 20px;
        display: block;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        border-left: 2px solid black;




    }
    .content_center {
        height: max-content;
        width: 30rem;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        margin: 0 20px 3px 1px;
        margin-right: 35px;
        display: block;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        border-left: 2px solid black;


    }
    .content_right {
        height: max-content;
        width: 30rem;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        margin: 0 20px 3px 0;
        display: block;;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        border-left: 2px solid black;


    }
    ul li{
        width: 25rem;
        font-size: 16px;
        display: inline;
        margin-right: 12px;
        height: max-content;

    } 
    #btn_ed {
        height: 2.5rem;
        width: 8rem;
        margin-top: 1.5rem;
        text-align: center;
        margin-left: 0;
        border-radius: 5px;
        color: #273746;
        background-color: yellow;
        padding-top: 8px;
        text-decoration: none;
        font-family: Geneva;
    }
    #btn_a {
        height: 2.5rem;
        width: 8rem;
        margin-top: 1.5rem;
        text-align: center;
        margin-left: 20rem;
        border-radius: 5px;
        color: #273746;
        background-color: #E74C3C;
        padding-top: 8px;
        text-decoration: none;
        font-family: Geneva;
    }
    #btn_a:hover {
        background-color: #CB4335;
    }
    #btn_e {
        height: 2.5rem;
        width: 8rem;
        margin-top: 1.5rem;
        text-align: center;
        margin-left: 21rem;
        border-radius: 5px;
        color: #273746;
        background-color: #F4D03F;
        padding-top: 8px;
        text-decoration: none;
        font-family: Geneva;
    }
    #btn_e:hover {
        background-color: #D4AC0D;
    }
    </style>

</head>
<body>
<div class="head">
        <img src="img/logofm.png" alt="Fm-logo" width="190px" height="70px">
        <h1>แบบฟอร์มกรอกข้อมูล</h1>
        <a href="../logout.php" id="btn_a">ออกจากระบบ</a>
        <a href="editpwd.php" id = "btn_ed">เปลี่ยนรหัสผ่าน</a>
        
</div>

<div class="bottom_h"> 
   <table class="table table-dark table-striped" id="table_h" style="width: 80%;">
        <tr style="text-align: center;">
            <th>ID</th>
            <th>UserID</th>
            <th>PCName</th>
            <th>Location</th>
            <th>User</th>
        </tr>
            <?php 
            $sql = "SELECT * FROM`fmpc_computer` WHERE `cpuid`='$username'";
            $result = mysqli_query($conn,$sql); 
            while($row=mysqli_fetch_assoc($result)){
            ?> 
                <tr>
                    <td><?=$row['cpid']?></td>
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
    <div>
    </body>
</html>

