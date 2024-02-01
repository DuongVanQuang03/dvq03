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
            <img src="../image/bn1.jpg" >
            <img src="../image/bn5.jpg">
            <img src="../image/bn3.jpg">
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
                <li><a href="#">Trang Chủ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="#">Giỏ Hàng</a></li>
            </ul>
        </nav>
    </header>

    <div class="row">
    <div class="frutitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1><br>
    </div>
    <div class="row frucontent">
    <div class="row mb1e frudsloai">
        <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0002</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0002</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0002</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
            </tr>
        </table>
    </div>
   
</div>

            <div class="row mb10">
                <input type="submit" value="BỎ CHỌN TẤT CẢ">
                <input type="submit" value="CHỌN TẤT CẢ">
                <input type="submit" value="XÓA TẤT CẢ THƯ MỤC ĐÃ CHỌN">
                <input type="reset" value="NHẬP LẠI">
             <a href="danhsachloaihang.php"><input type="button" value="DANH SÁCH"></a> 
            </div>
        </form>
    </div>
</div>

</body>
</html>