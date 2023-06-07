<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;500&display=swap" rel="stylesheet"> 
    <title>แก้ไขรหัสผ่าน</title>
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
            margin-bottom: 20px;
            
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
    </style>
</head>
<body>
<div class="head">
        <img src="img/logofm.png" alt="Fm-logo" width="190px" height="70px">
        <h1>แบบฟอร์มกรอกข้อมูล</h1>
        <a href="../logout.php" id="btn_e">ออกจากระบบ</a>
</div>
<!-- HTML password change form -->
<center>
    <form method="post" action="change_password.php">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>

        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <input type="submit" value="Change Password">
    </form>
</center>
</body>
</html>