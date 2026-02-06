<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
    <link rel="icon" type="images/png" href="images.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Kanit', sans-serif;
            background-color: #f4f4f4;
        }

        /* ส่วนหัวข้อและรูปภาพ */
        .header-section {
            text-align: center;
            padding: 20px;
            background-color: white;
        }

        .header-section img {
            display: block;
            margin: 0 auto 10px;
            border-radius: 8px;
            object-fit: cover;
        }

        .header-section h1 {
            color: red;
            margin: 0;
            font-size: 2.5rem;
        }

        /* แถบเมนูนำทาง */
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
            justify-content: flex-end; /* ดันทุกอย่างไปทางขวา */
            height: 60px;
        }

        /* จัดสไตล์ช่องค้นหา */
        .search-container {
            flex-grow: 0.4; /* ขยายขนาดช่องค้นหาให้ใหญ่ขึ้น */
            margin-right: 15px; /* เว้นระยะห่างให้ติดกับ "หน้าแรก" */
            display: flex;
            position: relative; /* เพื่อกำหนดตำแหน่งไอคอนภายใน */
            align-items: center;
        }

        .search-container input[type="text"] {
            width: 100%;
            padding: 10px 45px 10px 15px; /* เพิ่ม padding ขวาเพื่อหลบไอคอน */
            font-size: 16px;
            border: none;
            border-radius: 20px; /* ปรับให้ขอบมนดูทันสมัย */
            outline: none;
            font-family: 'Kanit', sans-serif;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            color: #666;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .search-icon svg {
            width: 20px;
            height: 20px;
        }

        /* รายการเมนู */
        li {
            display: inline-block;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #111;
            border-radius: 4px;
        }

        @media (max-width: 768px) {
            ul {
                flex-direction: column;
                height: auto;
                padding: 10px 0;
            }
            .search-container {
                width: 90%;
                margin: 10px 0;
            }
            li {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="header-section">
        <!-- ใส่รูปภาพจำลอง -->
        <img src="images.jpg" width="200" height="150" alt="Logo">
        <h1>สั่งซื้อสินค้าออนไลน์</h1>

        
    </div>

    <nav>
        <ul>
            <!-- ช่องค้นหาที่ปรับให้ใหญ่ขึ้นและมีไอคอน Search -->
            <div class="search-container">
                <input type="text" placeholder="Search..">
                <div class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>

            <li><a href="#หน้าแรก">หน้าแรก</a></li>
            <li><a href="#หมวดหมู่">หมวดหมู่</a></li>
            <li><a href="#คำสั่งซื้อ">คำสั่งซื้อ</a></li>
            <li><a href="#ตะกร้า">ตะกร้า</a></li>
            <li><a href="login.php">ลงชื่อเข้าใช้</a></li>
        </ul>
    </nav>

</body>
</html>