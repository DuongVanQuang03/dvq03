<div class="catalog">
     <div class="boxleft">
<div class="mb">
  
    <div class="box_title">Quên mật khẩu</div>
    <div class="box_content">
      
        <form action="index.php?act=quenmk" method="post"   class="form_account">
           <div   class="form_account"></div>
           <h4>email</h4>
            <input type="email" name="email" >
          

            <input type="submit" value="Gửi" name="guiemail">
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