<div class="catalog">
     <div class="boxleft">
<div class="mb">
  
    <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
    <div class="box_content">
      <?php
      if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
        extract($_SESSION['user']);

      }
      ?>
        <form action="index.php?act=edit_taikhoan" method="post"   class="form_account">
           <div   class="form_account"></div>
           <h4>email</h4>
            <input type="email" name="email" value="<?=$email?>">
           <h4> Tên đăng nhập</h4>
            <input type="text" name="user" value="<?=$user?>">
            <h4>Mật khẩu</h4> 
            <input type="password" name="pass" value="<?=$pass?>">
            <h4>địa chỉ</h4> 
            <input type="text" name="address" value="<?=$address?>">
            <h4>Số Điện Thoại</h4> 
            <input type="text" name="tel" value="<?=$tel?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="nhập lại">
        </form>
        <h2 class="thongbao">
    <?php 
if (isset($thongbao)&&($thongbao!="")) {
    echo $thongbao;
}
    ?>
    </h2>
    </div>
</div>

</div>
<div class="boxright">
<?php  include "view/boxright.php"; ?>
</div>
</div>