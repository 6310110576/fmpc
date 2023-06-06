<?php 
include "db/connectDB.php";
// ตรวจสอบว่ามีค่ารหัสพนักงานที่ส่งมาหรือไม่
if (isset($_POST['usersearch'])) {
    // รหัสพนักงานที่ส่งมาจากแบบฟอร์ม
    $userID = $_POST['usersearch'];

    // คำสั่ง SQL สำหรับการเลือกข้อมูลพนักงานตามรหัสพนักงาน
    $sql = "SELECT * FROM fmpc_computer WHERE cpuid = '$userID'";

    // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
    $result = mysqli_query($conn, $sql);

    // ตรวจสอบว่ามีข้อมูลที่ได้รับหรือไม่
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }   else {
        echo "ไม่พบข้อมูลพนักงาน";
    }
} else { echo "กรุณากรอกข้อมูลรหัสพนักงาน";
    echo "กรุณากรอกข้อมูลรหัสพนักงาน";
}
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
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Taviraj', serif;
        }
        .head {
            height: 6rem;
            background-color: black;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            
        }
        .head img {
            overflow: hidden;
            margin-top: 10px;
            float: in;
        }
        .head h1 {
            color: aliceblue;
            display: block;
            margin-left: 25rem;
            /* margin-right: auto; */
            margin-top: 1.5rem;
            height: 50px;
            font-family: 'Niramit', sans-serif;
        }
        /* .head a {
            margin: auto 8rem;
        } */
        .content {
            margin: 20px;
        }
        #bar-s-b{
            height: 3.5rem;
            /* background-color: gray; */
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }
        .search-box {
            height: 2.2rem;
            width: 35rem;
            margin-top: 0.6rem;
            margin-left: 3rem;
            border-radius: 6px;
            border: 1.5px solid black;
            padding: 5px;
        }
        .search-box:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }
        #btn_s {
            margin-left: 1rem;
            padding: 7px 8px;
            color: white;
            background-color: #0084ff ;
            border-radius: 7px;
            font-size: 15px;
            font-family: 'Taviraj', serif;
            text-decoration: none;
            border: 2px solid #F4F6F7;

        }
        #btn_s:hover{
            background-color:  #ababab;
        }
        #btn_a {
            margin-left: 39.5rem;
            padding: 10px 20px;
            color: white;
            background-color: green;
            border-radius: 7px;
            font-size: 15px;
            font-family: 'Taviraj', serif;
            text-decoration: none;
            border: 2px solid #F4F6F7;
        }
        #btn_a:hover{
            background-color: #ababab;
        }
        td,tr {
            font-size: 18px;
        }
        #btn_e {
            height: 2.5rem;
            width: 8rem;
            margin-top: 1.5rem;
            text-align: center;
            margin-left: 26rem;
            border-radius: 5px;
            color: white;
            background-color: #E74C3C;
            padding-top: 8px;
            text-decoration: none;
            font-family: Geneva;
        }
        #btn_e:hover {
            background-color: #ababab;
        }
    </style>

</head>
<body>
<div class="head">
        <img src="img/logofm.png" alt="Fm-logo" width="190px" height="70px">
        <h1>แบบฟอร์มกรอกข้อมูล</h1>
        <a href="../home.php" id="btn_e">กลับสู่หน้าหลัก</a>
        
    </div>


<table class="table table-striped table-hover">
    <thead class="table table-dark">
        <tr style="text-align: center; width:60rem;">
            <th>userID</th>
            <th>PCName</th>
            <th>แผนก</th>
            <th>ชื่อผู้ใช้งาน</th>
            <th style="width: 220px;"></th>
        </tr>
    </thead>
            <?php 
            $sql = "SELECT * FROM fmpc_computer WHERE cpuid = '$userID'";
            $result = mysqli_query($conn,$sql); 
            while($row=mysqli_fetch_assoc($result)){
            ?> 
                <tr style="text-align: center;">
                    <td><?=$row['cpuid']?></td>
                    <td><?=$row['cpname']?></td>
                    <td><?=$row['cplocation']?></td>
                    <td><?=$row['cpuser']?></td>
                    <td>
                        <a href='detail.php?id=<?=$row['cpuid']?>' class="btn btn-warning">Detail</a>
                        <a href="db/delete-inDB.php?id=<?=$row['cpuid']?>" class="btn btn-danger" style="margin-left: 5px;" onclick="Del(this.href);return false;">ลบข้อมูล</a>
                    </td>
                </tr>
                
           <?php 
           }
            mysqli_close($conn);
           ?> 
    </table>
 </div> 
<script language "JavaScript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;
    }
}
</script>
</body>
</html>
