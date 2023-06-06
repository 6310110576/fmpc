<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสมาชิก</title>
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
    <h1>เพิ่มสมาชิก</h1>
    <div class="container">
        
        <form action="db/meminDB.php" method="post">
            <label for="username">รหัสพนักงาน :</label>
            <input type="text" name="username" placeholder="ใส่รหัสพนักงาน" class="input_f" required><br><br><br>
            <label for="password">รหัสผ่าน &emsp;&ensp;&nbsp;:</label>
            <input type="password" name="password" placeholder="ใส่รหัสผ่าน" class="input_f" required><br><br><br>
            <label for="userlevel">userlevel:</label>
            <select name="userlevel" id="Ulevel" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br><br>
            &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<input type="submit" class="btn_s" value="บันทึกข้อมูล">
            <button type="reset" onclick=" window.location = 'login.php'">กลับสู่หน้า login</button>
        </form>

    </div>
</body>
</html>