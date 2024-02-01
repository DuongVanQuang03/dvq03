<div class="catalog">
     <div class="boxleft">
<div class="mb">
  
    <div class="box_title">ĐĂNG KÍ THÀNH VIÊN</div>
    <div class="box_content">
      
        <form action="index.php?act=dangky" method="post"   class="form_account">
           <div   class="form_account"></div>
           <h4>email</h4>
            <input type="email" name="email" >
           <h4> Tên đăng nhập</h4>
            <input type="text" name="user">
           <h4>Mật khẩu</h4> 
            <input type="password" name="pass">
            <input type="submit" value="đăng kí" name="dangky">
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