<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <style>
        .container {
            background-color: aqua;
            display: flex;
            width: 500px;
            height: 500px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            margin-top: 100px;


        }
        h1 {
            text-align: center;
            color: black;
        }
    </style>
</head>
<body>
    <h1>เข้าสู่ระบบ</h1>
    <div class="container">
        
        <form action="db/checkinDB.php" method="POST">
            <label for="username">รหัสพนักงาน :</label>
            <input type="text" name="username" placeholder="ใส่รหัสพนักงาน" class="input_f"><br><br><br>
            <label for="password">รหัสผ่าน &emsp;&ensp;&nbsp;:</label>
            <input type="password" name="password" placeholder="ใส่รหัสผ่าน" class="input_f"><br><br><br>
            &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<input type="submit" class="btn_s" value="บันทึกข้อมูล">
            <button type="reset" onclick=" window.location = 'register.php'">สมัครสามชิก</button>
        </form>

    </div>
</body>
</html>