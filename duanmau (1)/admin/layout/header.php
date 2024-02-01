<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/header.css">
</head>
<body>
  


<header>
<div id="banner" >
            <img src="image/bn1.jpg" >
            <img src="image/bn5.jpg">
            <img src="image/bn3.jpg">
          </div>
<script>
            var bannerIndex = 0;
            showBanner();
        
            function showBanner() {
              var i;
              var bannerImages = document.getElementById("banner").getElementsByTagName("img");
              for (i = 0; i < bannerImages.length; i++) {
                bannerImages[i].style.display = "none";
              }
              bannerIndex++;
              if (bannerIndex > bannerImages.length) {
                bannerIndex = 1
              }
              bannerImages[bannerIndex-1].style.display = "block";
              setTimeout(showBanner, 2000); // Thời gian chuyển đổi ảnh là 2 giây
            }
          </script>
        <h1>Trang Web Bán Hàng</h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=adddm">Danh Mục</a></li>
                <li><a href="index.php?act=addsp">Hàng Hóa</a></li>
                <li><a href="index.php?act=dskh">Khách Hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình Luận</a></li>
                <li><a href="index.php?act=thongke">Thống Kê</a></li>
            </ul>
        </nav>
    </header>
    </body>
</html>