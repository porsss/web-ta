<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Smartphone Guide</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
        }
        .navbar {
            background-color: #222;
            overflow: hidden;
            padding: 10px 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }
        .container {
            max-width: 900px;
            margin: 80px auto 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .phone {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            background: #f9f9f9;
            border-radius: 8px;
            position: relative;
        }
        .phone img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 8px;
        }
        .phone-info {
            flex: 1;
            padding-left: 20px;
        }
        .phone-info h3 {
            margin: 0 0 10px;
            color: #444;
        }
        .phone-info p {
            margin: 0;
            color: #666;
        }
        .btn-more {
            display: block;
            width: 120px;
            margin-top: 10px;
            padding: 8px;
            text-align: center;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-more:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="member.php">Member</a>
        <a href="login.php">Login</a>
        <a href="about.php">About</a>
    </div>
    <div class="container">
        <h2>แนะนำโทรศัพท์ยอดนิยม</h2>
        <div class="phone">
            <img src="img/iPhone_15_Pro_Blue_Titanium_PDP_Image_Position-1__GBEN_05e53dc0-3652-4b95-bd90-a417507e822d.webp" alt="iPhone 15 Pro">
            <div class="phone-info">
                <h3>iPhone 15 Pro</h3>
                <p>iPhone 15 Pro มาพร้อมกับชิป A17 Bionic กล้องระดับโปร และตัวเครื่อง Titanium ที่แข็งแรงและเบา</p>
                <a href="https://support.apple.com/th-th/111829" class="btn-more">ดูเพิ่มเติม</a>
            </div>
        </div>
        <div class="phone">
            <img src="img/download.jpg" alt="Samsung Galaxy S24 Ultra">
            <div class="phone-info">
                <h3>Samsung Galaxy S24 Ultra</h3>
                <p>สมาร์ทโฟนเรือธงจาก Samsung ที่มีปากกา S-Pen และกล้องความละเอียดสูง</p>
                <a href="https://www.samsung.com/th/smartphones/galaxy-s24-ultra/buy/" class="btn-more">ดูเพิ่มเติม</a>
            </div>
        </div>
        <div class="phone">
            <img src="img/download (1).jpg" alt="Xiaomi 14 Pro">
            <div class="phone-info">
                <h3>Xiaomi 14 Pro</h3>
                <p>โทรศัพท์สเปคแรงราคาคุ้มค่าจาก Xiaomi มาพร้อม Snapdragon 8 Gen 3 และจอ AMOLED 120Hz</p>
                <a href="https://www.mi.com/th/mobile/" class="btn-more">ดูเพิ่มเติม</a>
            </div>
        </div>
        <div class="phone">
            <img src="img/2T04QJU1L078GUoLfBgGXzMG9sG.jpg" alt="Samsung Galaxy Z Fold5">
            <div class="phone-info">
                <h3>Samsung Galaxy Z Fold5</h3>
                <p>สมาร์ทโฟนจอพับได้ระดับพรีเมียมจาก Samsung ที่มาพร้อมหน้าจอ Dynamic AMOLED 2X และ Snapdragon 8 Gen 2</p>
                <a href="https://www.samsung.com/th/smartphones/galaxy-z-fold6/buy/?cid=th_pd_ppc_google-ads_smartphone-cross-products_always-on_smb-cl-mx-ch-search-md-c-pn-awo-cpn-newmobile-brand-tg-kw-brand-foldablesamsungmobile-ad-fold6-adn-adtext_search-text_none_lo&utm_source=google&utm_medium=ppc&utm_campaign=smb-cl-mx-ch-search-md-c-pn-awo-cpn-newmobile-brand-tg-kw-brand-adn-adtext&utm_term=c&utm_content=none&gad_source=1&gclid=CjwKCAiAn9a9BhBtEiwAbKg6fi6t_5vfF2jAqeY3lm5XmO27ixmEIHzy1Sp4vn-YzFMRUyK8lqCTBBoCAjQQAvD_BwE&gclsrc=aw.ds" class="btn-more">ดูเพิ่มเติม</a>
            </div>
        </div>
        <div class="phone">
            <img src="img/Samsung-Smartphone-Galaxy-Z-Flip-3-8-256-Phantom-Black-5G-09.jpg" alt="Samsung Galaxy Z Fold5">
            <div class="phone-info">
                <h3> Samsung Galaxy Z Flip3</h3>
                <p>โทรศัพท์มือถือฝาพับสุดล้ำ Samsung Galaxy Z Flip3 (5G) (8+256) ไม่เพียงแต่เข้ากับสไตล์อันเป็นเอกลักษณ์ของคุณเท่านั้น</p>
                <a href="https://www.samsung.com/th/smartphones/galaxy-z-flip6/buy/?cid=th_pd_ppc_google-ads_smartphone-cross-products_always-on_smb-cl-mx-ch-search-md-c-pn-awo-cpn-newmobile-brand-tg-kw-brand-foldablesamsungmobile-ad-flip6-adn-adtext_search-text_none_lo&utm_source=google&utm_medium=ppc&utm_campaign=smb-cl-mx-ch-search-md-c-pn-awo-cpn-newmobile-brand-tg-kw-brand-adn-adtext&utm_term=c&utm_content=none&gad_source=1&gclid=CjwKCAiAn9a9BhBtEiwAbKg6fu4ir07cnkUDOBz2Erjc0JMDESa08Z8iDfhft5D0P-xEjZ1KFT9WxRoCIVIQAvD_BwE&gclsrc=aw.ds" class="btn-more">ดูเพิ่มเติม</a>
            </div>
        </div>
    </div>
</body>
</html>
