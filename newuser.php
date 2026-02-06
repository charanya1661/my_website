<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครบัญชีใหม่ - สั่งซื้อสินค้าออนไลน์</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Kanit', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ใช้ Header เดียวกับหน้าแรกเพื่อความต่อเนื่อง */
        .header-section {
            text-align: center;
            padding: 20px;
            background-color: white;
        }

        .header-section h1 {
            color: red;
            margin: 0;
            font-size: 2rem;
        }

        nav {
            background-color: #333;
            padding: 0 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            height: 50px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #111;
        }

        /* ส่วนของฟอร์มลงชื่อเข้าใช้ */
        .login-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box; /* สำคัญเพื่อให้ padding ไม่ดันขนาด input */
            font-family: 'Kanit', sans-serif;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-family: 'Kanit', sans-serif;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #cc0000;
        }

        .back-home {
            text-align: center;
            margin-top: 20px;
        }

        .back-home a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }

        .back-home a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="header-section">
        <h1>สั่งซื้อสินค้าออนไลน์</h1>
    </div>

    <nav>
        <ul>
            <li><a href="index.php">กลับหน้าแรก</a></li>
        </ul>
    </nav>

    <div class="newuser-container">
        <div class="newuser-card">
            <h2>สร้างบัญชีใหม่</h2>
            <form action=""check_login.php method="post">
                <div class="form-group">
                    <label for="username">ชื่อผู้ใช้ หรือ อีเมล</label>
                    <input type="text" id="username" name="username" placeholder="กรอกชื่อผู้ใช้ของคุณ" required>
                </div>
                <div class="form-group">
                    <label for="password">รหัสผ่าน</label>
                    <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน" required>
                </div>
                <div class="from-group">
                    <lable for="address">ที่อยู่</lable>
                    <input type="address" placeholder="กรอกที่อยู่" require>

                </div>
                <button type="submit" class="login-btn">เข้าสู่ระบบ</button>
            </form>
            <div class="back-home">
                <a href="index.php">← กลับไปยังหน้าหลัก</a>
            </div>
            <div class="new-user">
                <a href="index.php">สมัครบัญชีใหม่</a>
            </div>
        </div>
    </div>

</body>
</html>