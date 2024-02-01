<div class="mb">
                <div class="box_title">TÀI KHOẢN</div>
                <div class="box_content form_account">
                    <?php 
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                    ?>
                        <h4>xin chào</h4><br>
                        <?=$user?>
                        <li class="form_li"><a href="index.php?act=quenmk"><h4>Quên mật khẩu</h4></a>
                        </li>
                        <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                        <?php
                        if($role==1){
                        ?>
                        <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
                        <?php   
                        }
                        ?>
                        <li class="form_li"><a href="index.php?act=thoat">Đăng xuất </a></li>
                    <?php
            }else {   
                    ?>
                    <!-- Add your login form here -->
                    <form action="index.php?act=dangnhap" method="POST">
                        <h4>Tên đăng nhập</h4><br>
                        <input type="text" name="user" id="">
                        <h4>Mật khẩu</h4><br>
                        <input type="password" name="pass" id=""><br>
                        <br><input type="submit" value="Đăng nhập" name="dangnhap">
                        <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li class="form_li"><a href="index.php?act=dangky">Đăng kí</a></li>
                    </form>
                    <?php 
            }
            ?>
                </div>
          

            <div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content product_portfolio">
      <?php
      foreach ($dsdm as $dm) {
        extract($dm);
        $linkdm = "index.php?act=sanpham&iddm=".$id;
        echo '
        <li>
        <a href="'.$linkdm.'">'.$name.'</a>
        </li>';
      }  
      ?>
        <!-- <ul>
            <li><a href="#">Đồng hồ</a></li>
            <li><a href="#">Đồng hồ trẻ em</a></li>
            <li><a href="#">Phụ Kiện đồng hồ</a></li>
        </ul> -->
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="kyw"  placeholder="Từ khóa tìm kiếm">
                <input type="submit" name="timkiem" value="tìm kiếm">
            </form>
        </div>
    </div>
</div>

<div class="mb">
    <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
    <div class="box_content">
<?php 
foreach ($dstop10 as $sp){
    extract($sp);
    $linksp="index.php?act=sanphamct&idsp=".$id;
    $img=$img_path.$img;
    echo '<div class="selling_products" style="width:100%;">
    <img src="'.$img.'" alt="anh">
    <a href="'.$linksp.'">'.$name.'</a>
    </div>';
}
?>